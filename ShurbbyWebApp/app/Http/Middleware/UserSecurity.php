<?php

namespace App\Http\Middleware;

use App\Models\Clumppy;
use App\Models\Movement;
use App\Models\Shrubby;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSecurity
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
        $response = $next($request);
        $path = explode("/", $_SERVER['REQUEST_URI']);
       
        if($path[1]=='shrubbypage'){
            $post = Shrubby::where('id',$request->id)->first();
            $userid = $post->user_id;
        }
        elseif($path[1]=='clumppypage'){
            $post = Clumppy::where('id',$request->id)->first();
            $userid = $post->user_id;
        }
        elseif($path[1]=='movementpage'){
            $post = Movement::where('id',$request->movement_id)->first();
            $post = Clumppy::where('id',$post->clumppy_id)->first();
            $userid = $post->user_id;
        } 
            if ($userid == Auth::id()) {
                return $response;
            }
        
        return redirect()->to('/');
    }
}
