<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PhotoController extends Controller
{
	private $dossier;
	private $tab_dossier;
	private $path;
	public function getDossier (){
		return $this->dossier;
	}
	public function getTab (){
		return $this->tab_dossier;
	}
	public function getPath(){
		return $this->path;
	}
	public function displayPhoto (){
	    $this->dossier = 'photos_simplon';
	    $this->$tab_dossier = glob($dossier.'/*.jpg');
	   	$this->$path = $tab_dossier[array_rand($tab_dossier)];
	   	return view('home',['photo'=>$path]);	   
	}
	public function cropPhoto (){
		

	}
}
