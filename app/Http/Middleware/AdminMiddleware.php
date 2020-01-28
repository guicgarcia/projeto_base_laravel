<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
  public function handle($request, Closure $next)
  {		
  	/** Se não estiver logado e tentar acessar qualquer página é enviado para o login. */
  	if(Auth::user() == null) {
      return redirect()->route('admin.login');
    }

    /** 
    	Se estiver logado e for nível 2. 
		Cada controller trata de liberar os métodos para nível 2
    */
    $nivel_usuario = 2;
    if (Auth::user()->nivel_acesso == $nivel_usuario) {
        return redirect()->route('admin.blockAccess');
    } 

    return $next($request);
  }
}