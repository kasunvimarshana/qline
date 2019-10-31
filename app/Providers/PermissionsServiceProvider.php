<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
//use Illuminate\Http\Request;
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

use App\Permission;

class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Permission::get()->map(function($permission){
            Gate::define($permission->slug, function($user) use ($permission){
                return $user->hasPermissionTo($permission);
            });
        });
        
        Blade::directive('role', function ($role){
            return "<?php if((auth()->check()) && (auth()->user()->hasRole({$role}))) : ?>";
        });
        
        Blade::directive('endrole', function (){
            return "<?php endif; ?>";
        });
    }
}
