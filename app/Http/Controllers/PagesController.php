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

    public function protocolos(){
        return view('protocolos');
    }
    public function nuestrosplanes(){
        return view('nuestrosplanes');
    }
    public function politicasyprivacidad(){
        return view('politicasyprivacidad');
    }
    public function sitemap() {
		return response()->view('sitemap')->header('Content-Type', 'text/xml');
	}
	public function sitemap_images() {
		return response()->view('sitemap_images')->header('Content-Type', 'text/xml');
	}
}
