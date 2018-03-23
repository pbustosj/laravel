<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Status;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{	


	//Método que trae todos los usuarios y los carga en lista
	public function index(){
		//Traemos todos los usuarios del sistema
		$users = User::all();
		return view('user/user',[
			'users' => $users
		]);
	}

	//Método que perminte cargar pantalla para creación de usuario
	public function create($message=null){
		$data = request()->all();
		//Traemos profiles con valor 1 =  ACTIVO.
		$profiles = Profile:: where('status_idstatus',1)->get();
		//Traemos statues que tengan relación a tabla user
		$statues = Status:: where('tipeofstatus','LIKE', '%user%')->get();

		return view('user/create',[
			'profiles' => $profiles,
			'statues' => $statues,
			'message' => $message
		]);		
	}

	//Método que perminte guardar un registro de usuario
	public function save(){
		$output;
		$data = request()->all();
		//dd($this->getLastId());
		
		$lastId = intval($this->getLastId())+1;
		
		if($this->validateIfExistUser($data['txtRun'])){
			$output= "EError, Ya existe usuario con run: ".$data['txtRun'];

		}else{
			try {
				User::create([
					'iduser' => intval($lastId),
					'runuser' => intval($data['txtRun']),
					'dvuser' => $data['txtDv'],
					'firstnameuser' => $data['txtNombres'],
					'lastnameuser' => $data['txtApellidos'],
					'mailuser' => $data['txtMail'],
					'passuser' => $data['txtPassword'],
					'profile_idprofile' => intval($data['txtProfile']),
					'status_idstatus' => intval($data['txtStatus'])	
				]);

				$output= "SExcelente, Usuario Agregado Exitosamente.";

			} catch (\Illuminate\Database\QueryException $e) {
				dd($e);

			} catch (PDOException $e) {
				dd($e);
			}     
		}
		return redirect('user/create/'.$output);
	}

	public function update(){
		$data = request()->all();
		//dd($data);
		$exist = User:: where('runuser',$data['txtRun'])->get();
		//dd($exist);
		if(sizeof($exist)>0){
			$exist[0]->firstnameuser = $data['txtNombres'];
			$exist[0]->lastnameuser = $data['txtApellidos'];
			$exist[0]->mailuser = $data['txtMail'];
			$exist[0]->passuser = $data['txtPassword'];
			$exist[0]->profile_idprofile = intval($data['txtProfile']);
			$exist[0]->status_idstatus = intval($data['txtStatus']);	
			if($exist[0]->save()){
				return redirect('user/user');
			}

		}
	}

	//Método que valida si existe usuario con run
	public function validateIfExistUser($run){
		$exist = User:: where('runuser',$run)->get();
		if(sizeof($exist)>0){
			return true;
		}
		return false;
	}

	//Método que perminte obtener último id de tabla user
	public function getLastId(){
		$count = User::all()->count();
		if($count==0){
			return 0;
		}
		if($count==1){
			return 1;
		}
		return intval(DB::table('user')->max('iduser'));
	}

	//Métdodo para desactivar usuario
	public function changeStatusUser(){
		$data = request()->all();
		$exist = User:: where('iduser',$data['userIdToDelete'])->get();
       // dd($exist[0]->status_idstatus);
		if(sizeof($exist)>0){
			$exist[0]->status_idstatus == 0 ? $exist[0]->status_idstatus= 1 : $exist[0]->status_idstatus = 0 ;
			$exist[0]->save();
			$output = "SUsuario actualizado exitosamente";
			return redirect('user/user');
		}
		$output = "ENo se puede actualizar usuario";
		return redirect('user/user');

	}

    //Métdodo para desactivar usuario
	public function edit(){
		$data = request()->all();
		$exist = User:: where('iduser',$data['userIdToEdit'])->get();
        //dd($exist[0]);
		if(sizeof($exist)>0){
		//Traemos profiles con valor 1 =  ACTIVO.
			$profiles = Profile:: where('status_idstatus',1)->get();
		//Traemos statues que tengan relación a tabla user
			$statues = Status:: where('tipeofstatus','LIKE', '%user%')->get();
			return view('user/edit',[
				'userToEdit' => $exist[0],
				'profiles' => $profiles,
				'statues' => $statues
			]);
		}
	}
}

/*

INSERT INTO `user` (`iduser`, `runuser`, `dvuser`, `firstnameuser`, `lastnameuser`, `mailuser`, `passuser`, `profile_idprofile`, `status_idstatus`) VALUES ('2', '17372877', '8', 'Venecia', 'Barahona Concha', 'vbarahona@sanmartingestorias.cl', '123', '1', '1');

INSERT INTO `user` (`iduser`, `runuser`, `dvuser`, `firstnameuser`, `lastnameuser`, `mailuser`, `passuser`, `profile_idprofile`, `status_idstatus`) VALUES ('1', '18702516', '8', 'Pedro', 'Bustos Jorquera', 'pbustosj@sanmartingestorias.cl', '123', '1', '1');

*/