<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use App\User;

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
		return $this->Success('created_user');
    }
}
