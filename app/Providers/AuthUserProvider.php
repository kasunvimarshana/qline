<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\View;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Response;
//use Illuminate\Http\Response;
//use Illuminate\Support\Facades\Redirect;
//use DB;
//use Illuminate\Support\Str;
//use Illuminate\Http\JsonResponse;
//use \StdClass;
//use \Exception;
//use Carbon\Carbon;
//use Illuminate\Support\Facades\Storage;

class AuthUserProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        /*
        $this->app->singleton(Model::class, function ($app) {
            return new Model(config('app'));
        });
        */
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function($view){
            $auth_user = auth()->user();
            $view->with('auth_user', $auth_user);
        });
    }
}
