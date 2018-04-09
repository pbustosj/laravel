<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


class NotificationController extends Controller
{

	public function index(){
		$notifications = Contact::all();
		//dd($notifications);
		return view('notification/notification',[
			'notifications' => $notifications
		]);
	}

	public function save(){
		$output;
		$data = request()->all();
		//dd($data);
		$lastId = intval($this->getLastId())+1;
		try {
			Contact::create([
				'idcontact' => intval($lastId),
				'namecontact' => $data['nomConsulta'],
				'phonecontact' => intval($data['phoneConsulta']),
				'mailcontact' => $data['emaConsulta'],
				'subjectcontact' => $data['asuConsulta'],
				'messagecontact' => $data['cueMensaje'],
				'senddatecontact' => date('Y-m-d H:i:s'),
				'mailuserresponse' => 'desawebchi@gmail.com',
				'senddateresponse' => null,
				'status_idstatus' => 0
			]);
			$output= "Excelente, Formulario de contacto enviado exitosamente";
		} catch (\Illuminate\Database\QueryException $e) {
			$output= "Error, No se ha podido enviar formulario de contacto";
			//dd($e);
		} catch (PDOException $e) {
			$output= "Error, No se ha podido enviar formulario de contacto";
			//dd($e);
		}     		
		return redirect('/'.$output);
	}
	
	public function getLastId(){
		$count = Contact::all()->count();
		if($count==0){
			return 0;
		}
		return intval(DB::table('contact')->max('idcontact'));
	}
	public static function replaceAllNUllOrUndefinded($value){
		return $value=='' || $value== null ? 'Sin Datos' : $value;  
	}
}
