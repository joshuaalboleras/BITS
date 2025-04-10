<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;
use \Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {

      if(!isset($request->user()->role->role_name)){
        return redirect()->route('welcome');
      }
       
       if($request->user()->role->role_name !== $role){
         return redirect()->route($request->user()->role->route_name);
       }

        return $next($request);
    }
}
