<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
  public function handle($request, Closure $next)
  {
      $nivel_usuario = 2;
      if (Auth::user()->nivel_acesso == $nivel_usuario) {
        return redirect()->route('admin.login');
      }

      return $next($request);
  }
}