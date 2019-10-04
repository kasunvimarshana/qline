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
        if( (auth()->check()) ){
            //return (request()->header('referer')) ? redirect()->back()->withInput() : redirect()->home()->withInput();
            if( (Route::has('home')) ){
                return redirect()->route('home');
            }else{
                return redirect()->back()->withInput();
            }
        }
        if(view()->exists('login')){
            return View::make('login', []);
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
                //DB::beginTransaction();
                $client = new Client([
                    // Base URI is used with relative requests
                    'base_uri' => $this->app_url_api,
                ]);
                
                $dataArray = array(
                    'code' => $request->input('code'),
                    'password' => $request->input('password')
                );
                
                $response = $client->request('GET', 'logins/do-login', [
                    //'debug' => false,
                    //'verify' => false,
                    //'decode_content' => false,
                    //'stream' => false,
                    //'sink' => null,
                    //'save_to' => null,
                    //'timeout' => 0,
                    //'version' => 1.0,
                    //'config' => [],
                    //'proxy' => [],
                    //'curl' => [],
                    //'headers' => [],
                    //'body' => json_encode([]),
                    //'json' => [],
                    //'query' => [],
                    //'form_params' => [],
                    //'multipart' => [],
                    'query' => $dataArray
                ]);
                
                if($response->getStatusCode() == HTTPStatusCodeEnum::HTTP_OK){
                    $body = $response->getBody();
                    $contents = $body->getContents();
                    $contents = json_decode((string) $contents, false);
                    if( ($contents->meta->status_code == HTTPStatusCodeEnum::HTTP_OK) ){
                        $auth_object = $contents->data->auth_object;
                        $request->session()->put('input_key_token', $auth_object->access_token);
                        $request->session()->put('input_key_user', $auth_object->user_id);
                        $request->session()->put('is_login', true);
                        
                        if( ($auth_object->user) ){
                            $user = $auth_object->user;
                            $request->session()->put('authorized_user_id', $user->id);
                            $request->session()->put('authorized_user_code', $user->code);
                            $request->session()->put('authorized_user_code_epf', $user->code_epf);
                            $request->session()->put('authorized_user_name_first', $user->name_first);
                            $request->session()->put('authorized_user_name_last', $user->name_last);
                            $request->session()->put('authorized_user_phone_mobile', $user->phone_mobile);
                            $request->session()->put('authorized_user_display_name', $user->display_name);
                            $request->session()->put('authorized_user_image_uri', $user->image_uri);
                            $request->session()->put('authorized_user_email', $user->email);
                            $request->session()->put('authorized_user_company_id', $user->company_id);
                            $request->session()->put('authorized_user_strategic_business_unit_id', $user->strategic_business_unit_id);
                            $request->session()->put('authorized_user_department_id', $user->department_id);
                            $request->session()->put('authorized_user_section_id', $user->section_id);
                            $request->session()->put('authorized_user_grade', $user->grade);
                        }
                    }
                }
                
                unset($dataArray);
                // Commit transaction!
                //DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                //DB::rollback(); 
                return redirect()->back()->withInput();
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
        //$exitCode = Artisan::call('cache:clear');
        //$request->session()->forget([]);
        $request->session()->flush();
        $request->session()->regenerate();
        
        return $this->showLogin();
    }
    
}
