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
use App\Company;
use App\StrategicBusinessUnit;
use App\Factory;
use App\Line;
use App\Customer;
use App\Style;
use App\Colour;
use App\Export;
use App\StandardSewingAudit;
use App\Defect;
use App\QualityRecordSewingAudit;
use App\QualityRecordInputScanData;
use App\Status;

use App\Events\QualityRecordSewingAuditCreateEvent;
use App\Jobs\SendMessageFinishingJob;

class QualityRecordSewingAuditController extends Controller
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
        
        // validate the info, create rules for the inputs
        $rules = array();
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
                
                $companyObject = new Company();
                $company_id = $request->session()->get('setup_configuration_company_id', null);
                $companyObject = $companyObject->where('id', '=', $company_id)->first();
                $companyObject->load(['strategicBusinessUnits']);
                
                $strategicBusinessUnitObject = new StrategicBusinessUnit();
                $strategic_business_unit_id = $request->session()->get('setup_configuration_strategic_business_unit_id', null);
                $strategicBusinessUnitObject = $strategicBusinessUnitObject->where('id', '=', $strategic_business_unit_id)->first();
                
                $factoryObject = new Factory();
                $factory_id = $request->session()->get('setup_configuration_factory_id', null);
                $factoryObject = $factoryObject->where('id', '=', $factory_id)->first();
                
                $lineObject = new Line();
                $line_id = $request->session()->get('setup_configuration_line_id', null);
                $lineObject = $lineObject->where('id', '=', $line_id)->first();
                
                $customerObject = new Customer();
                $customer_id = $request->session()->get('setup_configuration_customer_id', null);
                $customerObject = $customerObject->where('id', '=', $customer_id)->first();
                
                $styleObject = new Style();
                $style_id = $request->session()->get('setup_configuration_style_id', null);
                $styleObject = $styleObject->where('id', '=', $style_id)->first();
                
                $colourObject = new Colour();
                $colour_id = $request->session()->get('setup_configuration_colour_id', null);
                $colourObject = $colourObject->where('id', '=', $colour_id)->first();
                
                $exportObject = new Export();
                $export_id = $request->session()->get('setup_configuration_export_id', null);
                $exportObject = $exportObject->where('id', '=', $export_id)->first();
                
                $standardSewingAuditObject = new StandardSewingAudit();
                $standard_sewing_audit_id = $request->session()->get('setup_configuration_standard_sewing_audit_id', null);
                $standardSewingAuditObject = $standardSewingAuditObject
                    ->where('id', '=', $standard_sewing_audit_id)
                    ->whereHas('standardDataSewingAudit', function($query){
                        //$query->where('key', '=', 'value');
                    })
                    ->first();
                if( ($standardSewingAuditObject) ){
                    $standardSewingAuditObject->load(['standardDataSewingAudit']);
                }
                
                $qualityRecordInputScanDataObject = new QualityRecordInputScanData();
                $count_data_sum = $qualityRecordInputScanDataObject
                    ->where('company_id', '=', $companyObject->id)
                    ->where('strategic_business_unit_id', '=', $strategicBusinessUnitObject->id)
                    ->where('factory_id', '=', $factoryObject->id)
                    ->where('line_id', '=', $lineObject->id)
                    ->whereDate('time_create', '=', $date_today->format('Y-m-d'))
                    ->whereDoesntHave('qualityRecordInputScanDataStatusSewingAudit', function($query){
                        //$query->where('key', '=', 'value');
                    })
                    ->sum('count_data');
                
                $standardSewingAuditObjectClone = clone $standardSewingAuditObject;
                $standardDataSewingAuditArray = $standardSewingAuditObjectClone->standardDataSewingAudit()
                    ->orderBy("batch_count_min", "asc")
                    ->get();
                $standardDataSewingAuditObject = null;
                $standardDataSewingAuditArray->each(function($value, $key) use(&$standardDataSewingAuditObject, $count_data_sum){
                    if( ($value->batch_count_min <= $count_data_sum) ){
                        if( ($standardDataSewingAuditObject == null) ){
                            $standardDataSewingAuditObject = $value;
                        }else if( ($value->batch_count_min > $standardDataSewingAuditObject->batch_count_min) ){
                            $standardDataSewingAuditObject = $value;
                        }
                    }
                });
                
                $quality_record_input_scan_data_count_data_sum = 0;
                $qualityRecordInputScanDataObject = new QualityRecordInputScanData();
                
                $quality_record_input_scan_data_count_data_sum = $qualityRecordInputScanDataObject
                    ->where('company_id', '=', $companyObject->id)
                    ->where('strategic_business_unit_id', '=', $strategicBusinessUnitObject->id)
                    ->where('factory_id', '=', $factoryObject->id)
                    ->where('line_id', '=', $lineObject->id)
                    ->whereDate('time_create', '=', $date_today->format('Y-m-d'))
                    ->whereHas('qualityRecordInputScanDataStatusSewingAudit', function($query){
                        //$query->where('key', '=', 'value');
                    })
                    ->sum('count_data');
                
                $quality_record_sewing_audit_id_count = 0;
                $qualityRecordSewingAuditObject = new QualityRecordSewingAudit();
                
                $quality_record_sewing_audit_id_count = $qualityRecordSewingAuditObject
                    ->where('company_id', '=', $companyObject->id)
                    ->where('strategic_business_unit_id', '=', $strategicBusinessUnitObject->id)
                    ->where('factory_id', '=', $factoryObject->id)
                    ->where('line_id', '=', $lineObject->id)
                    ->whereDate('time_create', '=', $date_today->format('Y-m-d'))
                    ->count('id');
                
                $quality_record_input_scan_data_count_data_sum_pass = 0;
                $qualityRecordInputScanDataObject = new QualityRecordInputScanData();
                
                $quality_record_input_scan_data_count_data_sum_pass = $qualityRecordInputScanDataObject
                    ->where('company_id', '=', $companyObject->id)
                    ->where('strategic_business_unit_id', '=', $strategicBusinessUnitObject->id)
                    ->where('factory_id', '=', $factoryObject->id)
                    ->where('line_id', '=', $lineObject->id)
                    ->whereDate('time_create', '=', $date_today->format('Y-m-d'))
                    ->whereHas('qualityRecordInputScanDataStatusSewingAudit', function($query){
                        $statusObject = new Status();
                        $statusObject = $statusObject->where("code", "=", "pass")->first();
                        //$query->where('key', '=', 'value');
                        $query = $query->where("status_id", "=", $statusObject->id);
                    })
                    ->sum('count_data');
                
                $quality_record_input_scan_data_count_data_sum_fail = 0;
                $qualityRecordInputScanDataObject = new QualityRecordInputScanData();
                
                $quality_record_input_scan_data_count_data_sum_fail = $qualityRecordInputScanDataObject
                    ->where('company_id', '=', $companyObject->id)
                    ->where('strategic_business_unit_id', '=', $strategicBusinessUnitObject->id)
                    ->where('factory_id', '=', $factoryObject->id)
                    ->where('line_id', '=', $lineObject->id)
                    ->whereDate('time_create', '=', $date_today->format('Y-m-d'))
                    ->whereHas('qualityRecordInputScanDataStatusSewingAudit', function($query){
                        $statusObject = new Status();
                        $statusObject = $statusObject->where("code", "=", "fail")->first();
                        //$query->where('key', '=', 'value');
                        $query = $query->where("status_id", "=", $statusObject->id);
                    })
                    ->sum('count_data');
                
                $data['company_object'] = $companyObject;
                $data['strategic_business_unit_object'] = $strategicBusinessUnitObject;
                $data['factory_object'] = $factoryObject;
                $data['line_object'] = $lineObject;
                $data['customer_object'] = $customerObject;
                $data['style_object'] = $styleObject;
                $data['colour_object'] = $colourObject;
                $data['export_object'] = $exportObject;
                $data['standard_sewing_audit_object'] = $standardSewingAuditObject;
                $data['count_data_sum'] = $count_data_sum;
                $data['standard_data_sewing_audit_array'] = $standardDataSewingAuditArray;
                $data['standard_data_sewing_audit_object'] = $standardDataSewingAuditObject;
                
                $data['quality_record_input_scan_data_count_data_sum'] = $quality_record_input_scan_data_count_data_sum;
                $data['quality_record_sewing_audit_id_count'] = $quality_record_sewing_audit_id_count;
                $data['quality_record_input_scan_data_count_data_sum_pass'] = $quality_record_input_scan_data_count_data_sum_pass;
                $data['quality_record_input_scan_data_count_data_sum_fail'] = $quality_record_input_scan_data_count_data_sum_fail;
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
        if(view()->exists('quality_stage_sewing_audit')){
            return View::make('quality_stage_sewing_audit', $data);
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
        $rules = array();
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
                
                $companyObject = new Company();
                $company_id = $request->session()->get('setup_configuration_company_id', null);
                $companyObject = $companyObject->where('id', '=', $company_id)->first();
                $companyObject->load(['strategicBusinessUnits']);
                
                $strategicBusinessUnitObject = new StrategicBusinessUnit();
                $strategic_business_unit_id = $request->session()->get('setup_configuration_strategic_business_unit_id', null);
                $strategicBusinessUnitObject = $strategicBusinessUnitObject->where('id', '=', $strategic_business_unit_id)->first();
                
                $factoryObject = new Factory();
                $factory_id = $request->session()->get('setup_configuration_factory_id', null);
                $factoryObject = $factoryObject->where('id', '=', $factory_id)->first();
                
                $lineObject = new Line();
                $line_id = $request->session()->get('setup_configuration_line_id', null);
                $lineObject = $lineObject->where('id', '=', $line_id)->first();
                
                $customerObject = new Customer();
                $customer_id = $request->session()->get('setup_configuration_customer_id', null);
                $customerObject = $customerObject->where('id', '=', $customer_id)->first();
                
                $styleObject = new Style();
                $style_id = $request->session()->get('setup_configuration_style_id', null);
                $styleObject = $styleObject->where('id', '=', $style_id)->first();
                
                $colourObject = new Colour();
                $colour_id = $request->session()->get('setup_configuration_colour_id', null);
                $colourObject = $colourObject->where('id', '=', $colour_id)->first();
                
                $exportObject = new Export();
                $export_id = $request->session()->get('setup_configuration_export_id', null);
                $exportObject = $exportObject->where('id', '=', $export_id)->first();
                
                $standardSewingAuditObject = new StandardSewingAudit();
                $standard_sewing_audit_id = $request->session()->get('setup_configuration_standard_sewing_audit_id', null);
                $standardSewingAuditObject = $standardSewingAuditObject
                    ->where('id', '=', $standard_sewing_audit_id)
                    ->whereHas('standardDataSewingAudit', function($query){
                        //$query->where('key', '=', 'value');
                    })
                    ->first();
                $standardSewingAuditObject->load(['standardDataSewingAudit']);
                
                $qualityRecordInputScanDataObject = new QualityRecordInputScanData();
                $qualityRecordInputScanDataArray = $qualityRecordInputScanDataObject
                    ->where('company_id', '=', $companyObject->id)
                    ->where('strategic_business_unit_id', '=', $strategicBusinessUnitObject->id)
                    ->where('factory_id', '=', $factoryObject->id)
                    ->where('line_id', '=', $lineObject->id)
                    ->whereDate('time_create', '=', $date_today->format('Y-m-d'))
                    ->whereDoesntHave('qualityRecordInputScanDataStatusSewingAudit', function($query){
                        //$query->where('key', '=', 'value');
                    })
                    ->whereDoesntHave('qualityRecordInputScanDataStatusFinishing', function($query){
                        //$query->where('key', '=', 'value');
                    })
                    ->get();
                $qualityRecordInputScanDataArray->load(['company', 'strategicBusinessUnit', 'factory', 'line', 'customer', 'style', 'colour', 'export']);
                
                $standardSewingAuditObjectClone = clone $standardSewingAuditObject;
                $standardDataSewingAuditArray = $standardSewingAuditObjectClone->standardDataSewingAudit()
                    ->orderBy("batch_count_min", "asc")
                    ->get();
                
                $data['company_object'] = $companyObject;
                $data['strategic_business_unit_object'] = $strategicBusinessUnitObject;
                $data['factory_object'] = $factoryObject;
                $data['line_object'] = $lineObject;
                $data['customer_object'] = $customerObject;
                $data['style_object'] = $styleObject;
                $data['colour_object'] = $colourObject;
                $data['export_object'] = $exportObject;
                $data['standard_sewing_audit_object'] = $standardSewingAuditObject;
                $data['quality_record_input_scan_data_array'] = $qualityRecordInputScanDataArray;
                $data['standard_data_sewing_audit_array'] = $standardDataSewingAuditArray;
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
        if(view()->exists('quality_stage_sewing_audit_create')){
            return View::make('quality_stage_sewing_audit_create', $data);
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
            'submit' => 'required',
            'quality_record_input_scan_data_id_array' => 'required'
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
                
                if( ($request->has('submit')) && ($request->filled('submit')) ){
                    $submit_value = $request->input("submit", null);
                    $submit_value_pass = "submit_pass";
                    $submit_value_fail = "submit_fail";
                    $submit_value_suspend = "submit_suspend";
                    
                    $defect_id_array = array();
                    $measure_point_id_array = array();
                    $quality_record_input_scan_data_id_array = array();
                    
                    if( (($request->has('defect_id_array')) && ($request->filled('defect_id_array'))) ){
                        $defect_id_array = (array) $request->input('defect_id_array');
                    }
                    
                    if( (($request->has('measure_point_id_array')) && ($request->filled('measure_point_id_array'))) ){
                        $measure_point_id_array = (array) $request->input('measure_point_id_array');
                    }
                    
                    if( (($request->has('quality_record_input_scan_data_id_array')) && ($request->filled('quality_record_input_scan_data_id_array'))) ){
                        $quality_record_input_scan_data_id_array = (array) $request->input('quality_record_input_scan_data_id_array');
                    }
                    
                    $count_sample_temp = 0;
                
                    if( (($request->has('count_sample')) && ($request->filled('count_sample'))) ){
                        $count_sample_temp = $request->input('count_sample');
                    }
                    
                    if( (!empty($defect_id_array)) && (!empty($measure_point_id_array)) ){
                        $dataArray = array(
                            'is_visible' => $request->input('is_visible', true),
                            'is_active' => $request->input('is_active', true),
                            'time_create' => $request->input('time_create', $date_today->format('Y-m-d H:i:s')),
                            //'count_sample' => $request->input('count_sample', $count_sample_temp),
                            'inspection_stage_id' => $request->session()->get('setup_configuration_inspection_stage_id'),
                            'standard_a_q_l_id' => $request->session()->get('setup_configuration_standard_sewing_audit_id'),
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
                            'quantity_audit' => $request->input('quantity_audit', $count_sample_temp),
                            //'quantity_pass' => $request->input('quantity_pass', $count_sample_temp),
                            'quantity_inspect' => $request->input('quantity_inspect', $count_sample_temp)
                        );

                        $qualityRecordSewingAuditObject = QualityRecordSewingAudit::create( $dataArray );
                        unset($dataArray);
                        $data['quality_record_sewing_audit_object'] = $qualityRecordSewingAuditObject;
                        
                        foreach($defect_id_array as $key => $value){
                            $defectObject = Defect::where("id", "=", $value)->first();

                            $qualityRecordDataSewingAuditObject = $qualityRecordSewingAuditObject->qualityRecordDataSewingAudit()->create([
                                'is_visible' => true,
                                'is_active' => true,
                                'time_create' => $date_today->format('Y-m-d H:i:s'),
                                'quality_record_sewing_audit_id' => $qualityRecordSewingAuditObject->id,
                                'user_id_create' => auth()->user()->id,
                                'measure_point_id' => $measure_point_id_array[$key],
                                'defect_category_id' => $defectObject->defect_category_id,
                                'defect_id' => $defectObject->id,
                                //'count_defect' => $request->input('count_defect', 1),
                                'count_defect' => 1,
                            ]);

                            $qualityRecordSewingAuditObject->qualityRecordDataSewingAudit()->save($qualityRecordDataSewingAuditObject);
                        }

                        unset($dataArray);
                    }
                    
                    $statusObject = new Status();
                    if( (strcasecmp($submit_value, $submit_value_pass) == 0) ){
                        //
                        $statusObject = $statusObject->where("code", "=", "pass")->first();
                    }else if( (strcasecmp($submit_value, $submit_value_fail) == 0) ){
                        //
                        $statusObject = $statusObject->where("code", "=", "fail")->first();
                    }else if( (strcasecmp($submit_value, $submit_value_suspend) == 0) ){
                        //
                        $statusObject = $statusObject->where("code", "=", "suspend")->first();
                    }
                    
                    $qualityRecordInputScanDataObjectArray = array();
                    
                    foreach( $quality_record_input_scan_data_id_array as $key => $value ){
                        $qualityRecordInputScanDataObject = new QualityRecordInputScanData();
                        $qualityRecordInputScanDataObject = $qualityRecordInputScanDataObject->where("id", "=", $value)->first();
                        $qualityRecordInputScanDataStatusSewingAuditObject = $qualityRecordInputScanDataObject->qualityRecordInputScanDataStatusSewingAudit()->create([
                            'is_visible' => true,
                            'is_active' => true,
                            'time_create' => $date_today->format('Y-m-d H:i:s'),
                            'status_id' => $statusObject->id,
                            'user_id_create' => auth()->user()->id
                        ]);
                        
                        $qualityRecordInputScanDataObject->qualityRecordInputScanDataStatusSewingAudit()->save($qualityRecordInputScanDataStatusSewingAuditObject);
                        
                        $qualityRecordInputScanDataObjectArray[$key] = $qualityRecordInputScanDataObject;
                    }
                    
                    if( (strcasecmp($submit_value, $submit_value_pass) == 0) ){
                        
                        //event(new QualityRecordSewingAuditCreateEvent($qualityRecordInputScanDataObjectArray));
                        $emailJob = (new SendMessageFinishingJob($qualityRecordInputScanDataObjectArray));
                        //->delay(Carbon::now()->addSeconds(10));
                        dispatch($emailJob);
                        
                    }
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
        
        if( (Route::has('qualityRecordSewingAudit.index')) ){
            return redirect()->route('qualityRecordSewingAudit.index');
        }else{
            return redirect()->back()->withInput();
        }
    }
    
}
