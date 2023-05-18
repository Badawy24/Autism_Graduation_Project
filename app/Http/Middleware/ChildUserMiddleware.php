<?php

namespace App\Http\Middleware;

use App\Models\Childs;
use Closure;
use Illuminate\Http\Request;

class ChildUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user_id = session('user_id');
        $child_id = $request->route('id');
        $child_user = Childs::where(['userId' => $user_id, 'id' => $child_id])->exists();

        if ($child_user) {
            return $next($request);
        } else {
            return redirect('/home')->with(['nochild' => 'nochild']);
        }
    }
}
