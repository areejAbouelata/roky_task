<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\Client\LoginClientValidation;
use App\Http\Requests\Client\RegisterValidation;
use App\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getRegister()
    {
        return view('client.register'); 
    }
    public function register(RegisterValidation $request)
    {

        $request['password'] = bcrypt($request->password);
        Client::create($request->all());
        return redirect()->route('albums') ;
    }
    public function getLogin()
    {
      return view('client.login');
    }


    public function login(LoginClientValidation $request )
    {

        $input = $request->except('_token');
        if (auth()->guard('clients')->attempt($input)){
                return redirect()->route('albums') ;
        }
        return redirect()->back();
    }

    
   
}
