<?php

namespace App\Http\Middleware;

use Closure;

//use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Response;
//use Illuminate\Http\Response;
//use DB;
//use Illuminate\Support\Str;
//use Illuminate\Http\JsonResponse;
//use \StdClass;
//use \Exception;
//use Carbon\Carbon;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session as Session;
//use Illuminate\Support\Facades\Cookie as Cookie;
//use GuzzleHttp\Client as Client;

//use App\Http\Resources\CommonResponseResource as CommonResponseResource;
//use App\Enums\HTTPStatusCodeEnum as HTTPStatusCodeEnum;

class AuthorizedUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
        if( (!auth()->check()) ){
            //return redirect('/');
            //return redirect()->route('fallback');
        }
        */
        if( (!auth()->check()) ){
            return redirect()->route('fallback');
        }
        
        return $next($request);
    }
}
