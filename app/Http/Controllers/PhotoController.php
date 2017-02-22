<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PhotoController extends Controller
{
	public function displayPhoto (){
	    $dossier = 'photos_simplon';
	    $tab_dossier = glob($dossier.'/*.jpg');
	   	$path = $tab_dossier[array_rand($tab_dossier)];
	   	return view('home',['photo'=>$path]);
	   
	}
}
