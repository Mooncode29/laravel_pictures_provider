<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PhotoController@displayPhoto');
// Route::get('/public/photos_simplon',function(){
// 	$dossier = '../public/photos_simplon';
// 	    $tab_dossier = glob($dossier.'/*.jpg');
// 	   // var_dump($tab_dossier)
// 	   $path = $tab_dossier[array_rand($tab_dossier)];
// require __DIR__.'../public/photos_simplon/DHP_6980.jpg';
// });