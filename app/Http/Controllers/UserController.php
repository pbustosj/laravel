<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Status;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

	public function index(){

		//Traemos todos los usuarios del sistema
		$users = User::all();
		return view('usuario/usuario',[
			'users' => $users
		]);
	
	}

	public function create($message=null){
		$data = request()->all();

		//Traemos perfiles que se encuentren activos
		$profiles = Profile:: where('status_idstatus',1)->get();
		//Traemos statues que tengan relación a tabla user
		$statues = Status:: where('tipeofstatus','LIKE', '%user%')->get();

		return view('usuario/create',[
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
			$output= "Ya existe usuario con run: ".$data['txtRun'];

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

				$output= "Usuario Agregado Exitosamente";

			} catch (\Illuminate\Database\QueryException $e) {
				dd($e);

			} catch (PDOException $e) {
				dd($e);
			}     
		}
		return redirect('usuarios/create/'.$output);

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
		return intval(DB::table('user')->max('iduser'));
	}

}

/*

INSERT INTO `user` (`iduser`, `runuser`, `dvuser`, `firstnameuser`, `lastnameuser`, `mailuser`, `passuser`, `profile_idprofile`, `status_idstatus`) VALUES ('2', '17372877', '8', 'Venecia', 'Barahona Concha', 'vbarahona@sanmartingestorias.cl', '123', '1', '1');

INSERT INTO `user` (`iduser`, `runuser`, `dvuser`, `firstnameuser`, `lastnameuser`, `mailuser`, `passuser`, `profile_idprofile`, `status_idstatus`) VALUES ('1', '18702516', '8', 'Pedro', 'Bustos Jorquera', 'pbustosj@sanmartingestorias.cl', '123', '1', '1');

*/