<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Status;
use App\Models\Profile;

class UserController extends Controller
{
    
	public function index(){
		//Traemos todos los usuarios del sistema
		$users = User::all();
		return view('usuario/usuario',[
				'users' => $users
		]);
	}

	public function create(){
		//Traemos perfiles que se encuentren activos
		$profiles = Profile:: where('status_idstatus',1)->get();
		//Traemos statues que tengan relación a tabla user
		$statues = Status:: where('tipeofstatus','LIKE', '%user%')->get();
		return view('usuario/create',[
				'profiles' => $profiles,
				'statues' => $statues
		]);		

	}
}
