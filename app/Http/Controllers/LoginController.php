<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
//use Illuminate\Http\Response;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use \StdClass;
use \Exception;
use Carbon\Carbon;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session as Session;
//use Illuminate\Support\Facades\Cookie as Cookie;
//use Illuminate\Http\Request;
//use GuzzleHttp\Psr7\Request as GuzzleRequest;
//use GuzzleHttp\Psr7\MultipartStream as GuzzleMultipartStream;
//use GuzzleHttp\Client as Client;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\CommonResponseResource as CommonResponseResource;
use App\Enums\HTTPStatusCodeEnum as HTTPStatusCodeEnum;

class LoginController extends Controller
{
    //
    protected $app_file_storage_uri;
    
    function __construct(){
        $this->app_file_storage_uri = config('app.app_file_storage_uri');
    }
    
    public function index(Request $request){ /*return response()->json( $request );*/ }
    
    public function showLogin(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        if( (auth()->check()) ){
            //return (request()->header('referer')) ? redirect()->back()->withInput() : redirect()->home()->withInput();
            if( (Route::has('home')) ){
                return redirect()->route('home');
            }
        }
        if(view()->exists('login')){
            return View::make('login', array());
        }else{
            return redirect()->back()->withInput();
        }
    }
    
    public function doLogin(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'code' => 'required',
            'password' => 'required|min:3'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $dataArray = array(
                    'is_active' => $request->input('is_active', true),
                    'code' => $request->input('code'),
                    'password' => $request->input('password')
                );
                
                auth()->attempt( $dataArray );
                unset($dataArray);
                
                if( (auth()->check()) ){
                    $userAPITokenObject = auth()->user()->userApiTokens()->create([
                        'is_visible' => true,
                        'is_active' => true,
                        //'is_deactivatable' => null,
                        //'is_notifiable' => null,
                        //'access_token' => null,
                        //'refresh_token' => null,
                        'code_active' => (mt_rand(0, 10000)),
                        //'ip_address' => $request->getClientIp(true),
                        'ip_address' => $request->ip(),
                        'active_role' => null,
                        //'time_create' => null,
                        //'time_active' => null,
                        //'time_deactive' => null,
                        //'duration_active' => null,
                        //'time_last_activity' => null,
                        //'user_id' => auth()->user()->id,
                        'user_agent' => $request->userAgent()
                    ]);
                    //auth()->user()->userApiTokens()->save( $userAPITokenObject );
                    $userAPITokenObject->user()->associate( auth()->user() )->save();
                    
                    $userAPITokenDataObject = $userAPITokenObject->userAPITokenData()->create([
                        'is_visible' => true,
                        'is_active' => true,
                        'data_key' => 'time_login',
                        'data_value' => $date_today->format('Y-m-d h:i:s'),
                        //'user_a_p_i_token_id' => ''
                    ]);
                    $userAPITokenObject->userAPITokenData()->save( $userAPITokenDataObject );
                    
                    $request->session()->put('authorized_token_id', $userAPITokenObject->id);
                }else{
                    throw new Exception('exception');
                }
                
                unset($dataArray);
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                return redirect()->back()->withInput(Input::except('password'));
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        if( (Route::has('home')) ){
            return redirect()->route('home');
        }else{
            return redirect()->back()->withInput();
        }
    }
    
    public function doLogout(Request $request){
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        //$exitCode = Artisan::call('cache:clear');
        //$request->session()->forget([]);
        //$request->session()->flush();
        //$request->session()->regenerate();
        //auth()->logout();
        
        auth()->logout();
        
        return $this->showLogin($request);
    }
    
}
