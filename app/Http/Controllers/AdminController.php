<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Mail;
use Yajra\Datatables\Datatables;

class AdminController extends ApiController
{
    public function createUser(Request $request)
    {
    	$validator=$this->validate($request, [
            'name' 			=> 'required',
			'phone'			=> 'required',
			'address'		=> 'required',
			'email'			=> 'required|unique:users|email',
			'password'		=> 'required',
			'comments'		=> 'required',
        ]);
        User::create($request->all());
        Mail::send('comments.emails.contact', $request->all(), function($msj){
                $msj->subject('Correo de Contacto');
                $msj->to('dcmo127901@gmail.com');

            });
		return $this->Success('created_user');

    }

    public function comments()
    {
    	return view('comments.comments');
    }
    public function anyData()
    {
    	return Datatables::of(User::query())->make(true);
    }

    public function pdf()
    {
    	$users=User::all();
    	$pdf=PDF::loadView('comments.commentsDowload', ['users'=>$users]);
    	return $pdf->download('comments.pdf');
    }
}
