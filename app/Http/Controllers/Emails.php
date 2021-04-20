<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMaillable;
use Illuminate\Support\Facades\Mail;

class Emails extends Controller
{
   
    function index()
    {
     return view('form');
    }

	
	public function send(Request $request)
	{
  $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);
    $data = array(
        'name'      =>  $request->input('name'),
        'message'   =>   $request->input('message')
    );
    $email = $request->input('email');
  Mail::to($email)->send(new ContactanosMaillable($data));
  return back()->with('success', 'Enviado exitosamente!');

	}
}
