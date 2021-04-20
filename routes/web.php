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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function(){
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







// ruta de formulario
// Route::get('/form', 'Emails@index');

Route::get('/form', [Emails::class, 'index']);
// // ruta al enviar correo
Route::post('/send', [Emails::class,'send']);