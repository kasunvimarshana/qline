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
use App\QualityRecordCutting;
use App\Defect;

class QualityRecordCuttingController extends Controller
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
        
        if(view()->exists('quality_stage_cutting')){
            return View::make('quality_stage_cutting', array());
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
        $rules = array();
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
                    'count_sample' => $request->input('count_sample'),
                    'inspection_stage_id' => $request->session()->get('setup_configuration_inspection_stage_id'),
                    'company_id' => $request->session()->get('setup_configuration_company_id'),
                    'strategic_business_unit_id' => $request->session()->get('setup_configuration_strategic_business_unit_id'),
                    'factory_id' => $request->session()->get('setup_configuration_factory_id'),
                    'user_id_create' => auth()->user()->id,
                    'ip_address' => $request->ip(),
                    'severity' => $request->input('severity'),
                    'action_to_be_taken' => $request->input('action_to_be_taken')
                );

                $qualityRecordCuttingObject = QualityRecordCutting::create( $dataArray );
                unset($dataArray);
                $data['quality_record_cutting_object'] = $qualityRecordCuttingObject;
                
                $defect_id_array = array();
                
                if( (($request->has('defect_id')) && ($request->filled('defect_id'))) ){
                    $defect_id_array = (array) $request->input('defect_id');
                }
                
                foreach($defect_id_array as $key => $value){
                    $defectObject = Defect::where("id", "=", $value)->first();
                    
                    $qualityRecordDataCuttingObject = $qualityRecordCuttingObject->qualityRecordDataCutting()->create([
                        'is_visible' => true,
                        'is_active' => true,
                        'time_create' => $date_today->format('Y-m-d H:i:s'),
                        'quality_record_cutting_id' => $qualityRecordCuttingObject->id,
                        'user_id_create' => auth()->user()->id,
                        'defect_category_id' => $defectObject->defect_category_id,
                        'defect_id' => $defectObject->id,
                        'count_defect' => $request->input('count_defect'),
                        'severity' => $request->input('severity'),
                        'action_to_be_taken' => $request->input('action_to_be_taken')
                    ]);
                    
                    $qualityRecordCuttingObject->qualityRecordDataCutting()->save($qualityRecordDataCuttingObject);
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
        
        if( (Route::has('qualityRecordCutting.index')) ){
            return redirect()->route('qualityRecordCutting.index');
        }else{
            return redirect()->back()->withInput();
        }
    }
    
}
