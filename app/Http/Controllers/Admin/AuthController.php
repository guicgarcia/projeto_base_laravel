<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function showLoginForm()
    {
        return view('admin.login', [
            
        ]);
    }

    public function login(Request $request)
    {
    	if(in_array('', $request->only('email', 'password'))) {
    		$json['message'] = $this->message->error('Erro, Informe todos os campos para efetuar o login.')->render();
    		return response()->json($json);
    	}
    	
    	if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = $this->message->error('Informe um e-mail válido.')->render();
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(!Auth::attempt($credentials)) {
            $json['message'] = $this->message->error('Usuário e senha não conferem')->render();
            return response()->json($json);
        }

        $json['redirect'] = route('admin.home');
        return response()->json($json);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
