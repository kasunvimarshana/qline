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
use App\Defect;
use App\QualityRecordInputScanData;

use App\Events\QualityRecordInputScanDataCreateEvent;
use App\Jobs\SendMessageSewingAuditJob;

class QualityRecordInputScanDataController extends Controller
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
                
                $qualityRecordInputScanDataObject = new QualityRecordInputScanData();
                $aualityRecordInputScanDataArray = $qualityRecordInputScanDataObject
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
                $aualityRecordInputScanDataArray->load(['style']);
                
                $data['company_object'] = $companyObject;
                $data['strategic_business_unit_object'] = $strategicBusinessUnitObject;
                $data['factory_object'] = $factoryObject;
                $data['line_object'] = $lineObject;
                $data['customer_object'] = $customerObject;
                $data['style_object'] = $styleObject;
                $data['colour_object'] = $colourObject;
                $data['export_object'] = $exportObject;
                $data['quality_record_input_scan_data_array'] = $aualityRecordInputScanDataArray;
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
        if(view()->exists('quality_record_input_scan_data')){
            return View::make('quality_record_input_scan_data', $data);
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
            'code' => 'required'
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
                    'code' => $request->input('code'),
                    'count_data' => $request->input('count_data'),
                    'company_id' => $request->session()->get('setup_configuration_company_id'),
                    'strategic_business_unit_id' => $request->session()->get('setup_configuration_strategic_business_unit_id'),
                    'factory_id' => $request->session()->get('setup_configuration_factory_id'),
                    'line_id' => $request->session()->get('setup_configuration_line_id'),
                    'style_id' => $request->input('style_id', $request->session()->get('setup_configuration_style_id')),
                    'user_id_create' => auth()->user()->id,
                    'ip_address' => $request->ip(),
                    'size_id' => $request->input('size_id')
                );
                
                $qualityRecordInputScanDataObject = QualityRecordInputScanData::create( $dataArray );
                unset($dataArray);
                $data['quality_record_input_scan_data_object'] = $qualityRecordInputScanDataObject;

                unset($dataArray);
                
                //event(new QualityRecordInputScanDataCreateEvent($qualityRecordInputScanDataObject));
                $emailJob = (new SendMessageSewingAuditJob($qualityRecordInputScanDataObject));
                //->delay(Carbon::now()->addSeconds(10));
                dispatch($emailJob);
                
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
        
        if( (Route::has('qualityRecordInputScanData.create')) ){
            return redirect()->route('qualityRecordInputScanData.create');
        }else{
            return redirect()->back()->withInput();
        }
    }
    
}
