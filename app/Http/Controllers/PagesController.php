<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function home(){
        $user = \Auth::user();
        return view('welcome', [
			'user' => $user,
		]);
    }

    public function cotizacion(){
        return view('cotizacion');
    }
}
