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

class SewingAuditController extends Controller
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
    
    public function index(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        if(view()->exists('setup_configuration_sewing_audit')){
            return View::make('setup_configuration_sewing_audit', array());
        }else{
            return redirect()->back()->withInput();
        }
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        //$request->session()->flush();
        
        if( ($request->has('company_id')) && ($request->filled('company_id')) ){
            $company_id = $request->input('company_id', null);
            $request->session()->put('setup_configuration_company_id', $company_id);
        }
        
        if( ($request->has('strategic_business_unit_id')) && ($request->filled('strategic_business_unit_id')) ){
            $strategic_business_unit_id = $request->input('strategic_business_unit_id', null);
            $request->session()->put('setup_configuration_strategic_business_unit_id', $strategic_business_unit_id);
        }
        
        if( ($request->has('factory_id')) && ($request->filled('factory_id')) ){
            $factory_id = $request->input('factory_id', null);
            $request->session()->put('setup_configuration_factory_id', $factory_id);
        }
        
        if( ($request->has('time_create')) && ($request->filled('time_create')) ){
            $time_create = $request->input('time_create', null);
            $request->session()->put('setup_configuration_time_create', $time_create);
        }
        
        if( ($request->has('line_id')) && ($request->filled('line_id')) ){
            $line_id = $request->input('line_id', null);
            $request->session()->put('setup_configuration_line_id', $line_id);
        }
        
        if( ($request->has('customer_id')) && ($request->filled('customer_id')) ){
            $customer_id = $request->input('customer_id', null);
            $request->session()->put('setup_configuration_customer_id', $customer_id);
        }
        
        if( ($request->has('style_id')) && ($request->filled('style_id')) ){
            $style_id = $request->input('style_id', null);
            $request->session()->put('setup_configuration_style_id', $style_id);
        }
        
        if( ($request->has('colour_id')) && ($request->filled('colour_id')) ){
            $colour_id = $request->input('colour_id', null);
            $request->session()->put('setup_configuration_colour_id', $colour_id);
        }
        
        if( ($request->has('export_id')) && ($request->filled('export_id')) ){
            $export_id = $request->input('export_id', null);
            $request->session()->put('setup_configuration_export_id', $export_id);
        }
        
        if( ($request->has('standard_sewing_audit_id')) && ($request->filled('standard_sewing_audit_id')) ){
            $standard_sewing_audit_id = $request->input('standard_sewing_audit_id', null);
            $request->session()->put('setup_configuration_standard_sewing_audit_id', $standard_sewing_audit_id);
        }
        
        if( ($request->has('inspection_stage_id')) && ($request->filled('inspection_stage_id')) ){
            $inspection_stage_id = $request->input('inspection_stage_id', null);
            $request->session()->put('setup_configuration_inspection_stage_id', $inspection_stage_id);
        }
        
        if( (Route::has('qualityRecordSewingAudit.index')) ){
            return redirect()->route('qualityRecordSewingAudit.index');
        }else{
            return redirect()->back()->withInput();
        }
    }
    
}
