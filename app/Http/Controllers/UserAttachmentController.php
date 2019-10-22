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
use Illuminate\Support\Facades\Storage;
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
use App\UserAttachment as UserAttachment;

class UserAttachmentController extends Controller
{
    //
    protected $app_file_storage_uri;
    
    function __construct(){
        $this->app_file_storage_uri = config('app.app_file_storage_uri');
        //create directory
        /*
        if(!Storage::exists( $this->app_file_storage_uri )) {
            Storage::makeDirectory($this->app_file_storage_uri, 0775, true);
        }
        */
    }
    
    public function index(Request $request){ /*return response()->json( $request );*/ }
    
    public function showFile(Request $request, $filename){
        //$path = explode('/', $filename);
        //$path = storage_path($filename);
        $response = null;
        $filename = str_replace('/', DIRECTORY_SEPARATOR, $filename); 
        if (!Storage::exists($filename)) {
            abort(404);
        }
        $file = Storage::get($filename);
        $type = Storage::mimeType($filename);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
    
    public function getFile(Request $request, UserAttachment $userAttachment){
        //$link_url = Storage::url( $userAttachment->link_url );
        //return Storage::download($userAttachment->link_url, $name = null, $headers = null);

        if(Storage::exists($userAttachment->link_url)){
            return Storage::download($userAttachment->link_url, $userAttachment->file_original_name);
        } 
    }
    
}
