<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class NotificationController extends Controller
{

	public function index(){
		$notifications = Contact::all();
		return view('notificacion/notificacion',[
			'notifications' => $notifications
		]);
	}

	public function save(){
		$output;
		$data = request()->all();
		//dd($this->getLastId());
		$lastId = intval($this->getLastId())+1;
		try {
			Contact::create([
				'idcontact' => intval($lastId),
				'mailcontact' => $data['mailcontact'],
				'subjectcontact' => $data['subjectcontact'],
				'messagecontact' => $data['messagecontact'],
				'senddatecontact' => $data['senddatecontact'],
				'mailuserresponse' => $data['mailuserresponse'],
				'senddateresponse' => $data['senddateresponse'],
				'status_idstatus' => intval($data['status_idstatus'])
			]);

			$output= "Formulario de contacto enviado exitosamente";

		} catch (\Illuminate\Database\QueryException $e) {
			dd($e);

		} catch (PDOException $e) {
			dd($e);
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
}
