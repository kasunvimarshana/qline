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
use App\User;
use App\StandardRQC;
use App\QualityRecordRQC;
use App\Defect;

class QualityRecordRQCController extends Controller
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
        
        if(view()->exists('quality_stage_r_q_c')){
            return View::make('quality_stage_r_q_c', array());
        }else{
            return redirect()->back()->withInput();
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'code' => 'required|exists:users,code'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            /*
            $data = array(
                'title' => 'error',
                'text' => $validator->errors()->first(),
                'type' => 'warning',
                'timer' => 3000
            );
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
            */
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $userObject = new User();
                $userObject = $userObject->where('code', '=', $request->input('code'))->first();
                
                $standardRQCObject = new StandardRQC();
                $standard_rqc_id = $request->session()->get('setup_configuration_standard_r_q_c_id', null);
                $standardRQCObject = $standardRQCObject->where('id', '=', $standard_rqc_id)->first();
                $standardRQCObject->load(['standardDataRQC']);
                
                $qualityRecordRQCObject = new QualityRecordRQC();
                $attempt = $qualityRecordRQCObject
                    ->where('user_id_record', '=', $userObject->id)
                    ->whereDate('time_create', '=', $date_today->format('Y-m-d'))
                    ->count();
                
                $attempt = ($attempt + 1);
                $data['user_object'] = $userObject;
                $data['attempt'] = $attempt;
                $data['standardRQCObject'] = $standardRQCObject;
                unset($dataArray);
                
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                /*
                $data = array(
                    'title' => 'error',
                    'text' => 'error',
                    'type' => 'warning',
                    'timer' => 3000
                );
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
                ));
                */
                return redirect()->back()->withInput();
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        if(view()->exists('quality_stage_r_q_c_create')){
            return View::make('quality_stage_r_q_c_create', $data);
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
    public function store(Request $request)
    {
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'measure_point_id_array' => 'required',
            'defect_id_array' => 'required'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            /*$data = array(
                'title' => 'error',
                'text' => $validator->errors()->first(),
                'type' => 'warning',
                'timer' => 3000
            );
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));*/
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $dataArray = array(
                    'is_visible' => $request->input('is_visible', true),
                    'is_active' => $request->input('is_active', true),
                    'time_create' => $request->input('time_create', $date_today->format('Y-m-d H:i:s')),
                    'attempt' => $request->input('attempt'),
                    'count_sample' => $request->input('count_sample'),
                    'inspection_stage_id' => $request->session()->get('setup_configuration_inspection_stage_id'),
                    'company_id' => $request->session()->get('setup_configuration_company_id'),
                    'strategic_business_unit_id' => $request->session()->get('setup_configuration_strategic_business_unit_id'),
                    'factory_id' => $request->session()->get('setup_configuration_factory_id'),
                    'line_id' => $request->session()->get('setup_configuration_line_id'),
                    'customer_id' => $request->session()->get('setup_configuration_customer_id'),
                    'style_id' => $request->session()->get('setup_configuration_style_id'),
                    'colour_id' => $request->session()->get('setup_configuration_colour_id'),
                    'export_id' => $request->session()->get('setup_configuration_export_id'),
                    'user_id_create' => auth()->user()->id,
                    'ip_address' => $request->ip(),
                    'user_id_record' => $request->input('user_id_record')
                );

                $qualityRecordRQCObject = QualityRecordRQC::create( $dataArray );
                unset($dataArray);
                $data['quality_record_r_q_c_object'] = $qualityRecordRQCObject;
                
                $defect_id_array = array();
                $measure_point_id_array = array();
                
                if( (($request->has('defect_id_array')) && ($request->filled('defect_id_array'))) ){
                    $defect_id_array = (array) $request->input('defect_id_array');
                }
                
                if( (($request->has('measure_point_id_array')) && ($request->filled('measure_point_id_array'))) ){
                    $measure_point_id_array = (array) $request->input('measure_point_id_array');
                }
                
                foreach($defect_id_array as $key => $value){
                    $defectObject = Defect::where("id", "=", $value)->first();
                    
                    $qualityRecordDataRQCObject = $qualityRecordRQCObject->qualityRecordDataRQC()->create([
                        'is_visible' => true,
                        'is_active' => true,
                        'time_create' => $date_today->format('Y-m-d H:i:s'),
                        'quality_record_r_q_c_id' => $qualityRecordRQCObject->id,
                        'user_id_create' => auth()->user()->id,
                        'measure_point_id' => $measure_point_id_array[$key],
                        'defect_category_id' => $defectObject->defect_category_id,
                        'defect_id' => $defectObject->id
                    ]);
                    
                    $qualityRecordRQCObject->qualityRecordDataRQC()->save($qualityRecordDataRQCObject);
                }

                unset($dataArray);
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                $data = array(
                    'title' => 'error',
                    'text' => 'error',
                    'type' => 'warning',
                    'timer' => 3000
                );
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
                ));
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        if( (Route::has('qualityRecordRQC.index')) ){
            return redirect()->route('qualityRecordRQC.index');
        }else{
            return redirect()->back()->withInput();
        }
    }
    
}
