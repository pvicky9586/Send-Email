<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Mail\ContactanosMaillable;
use App\Http\Controllers\Emails;



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
    return view('welcome');
});


//ENVIADO X GET DESDE LA ROUTE
Route::get('/xget', function(){
	return view('seend');
});
Route::get('/enviado', function(Request $request){
	$data = array(
        'name'      =>  $request->input('name'),
        'message'   =>   $request->input('message')
    );
    $email= $request->email;
		// $correo = new ContactanosMaillable;
	 	Mail::to($email)->send(new ContactanosMaillable($data));
	 //return view('welcome');
		return "mensaje enviado";
})->name('seend');




//ENVIO X POST- USANDO controlador
Route::get('/xpost', [Emails::class, 'index']);
Route::post('/send', [Emails::class,'send']);