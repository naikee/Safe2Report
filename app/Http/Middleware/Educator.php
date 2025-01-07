<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Educator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user->roles != 'editor') {
            if ($request->ajax()) {
                return back()->with('err', __('Permission Denied!'));
            } else {
                flash()->addError('Permission Denied!');
                return redirect()->back();
            }
        }
        return $next($request);
    }
}
