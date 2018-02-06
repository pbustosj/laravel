<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    
    public function index(){
		$users = [
			'pasd',
			'asdasd',
			'asdasdasdasdas1',
		];
		return view('notificacion/notificacion',[

				'users' => $users
		]);
	}
}
