<?php
use Illuminate\Http\Request;
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

Route::get('/', function () {
    //return view('plantilla.usuario');
	return view('ingreso');
});

// Authentication Routes...
Route::post('login', 'Auth\LoginController@login');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');       
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//RSU
Route::resource('rsu-misproyectos', 'modulos\rsu\MisProyectosController');
Route::get('rsu-lineas/{id}', 'modulos\rsu\MisProyectosController@lineas')->name('lineas');
Route::post('evidencias/{post}/imagen', 'modulos\rsu\MisProyectosController@evidencias')->name('evidencias');  
//Fin RSU

//Adminsión    
Route::resource('inscripcion-general', 'modulos\admision\AdmisionController');
Route::get('prov/{id}', 'modulos\admision\AdmisionController@provincia')->name('provincia');
Route::get('dist/{id}', 'modulos\admision\AdmisionController@distrito')->name('distrito');   
//Fin Admisión

//Inscripciones-UNHEVAL
Route::resource('unheval', 'modulos\inscripcion\UnhevalController');
Route::get('maar/{id}', 'modulos\inscripcion\UnhevalController@maestria')->name('maestria');
Route::get('prov/{id}', 'modulos\inscripcion\UnhevalController@provincia')->name('provincia');
Route::get('dist/{id}', 'modulos\inscripcion\UnhevalController@distrito')->name('distrito');

//Inscripciones-UNHEVAL
Route::resource('unheval1', 'modulos\inscripcion\ProgramasController');