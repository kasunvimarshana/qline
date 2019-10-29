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
use App\QualityRecordCNI;
use App\Defect;

class QualityRecordCNIController extends Controller
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
        
        if(view()->exists('quality_stage_c_n_i')){
            return View::make('quality_stage_c_n_i', array());
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
                    'customer_id' => $request->input('customer_id'),
                    'style_id' => $request->input('style_id'),
                    'colour_id' => $request->input('colour_id'),
                    'export_id' => $request->input('export_id'),
                    'user_id_create' => auth()->user()->id,
                    'ip_address' => $request->ip(),
                    'description' => $request->input('description'),
                    'p_o_id' => $request->input('p_o_id'),
                    'count_total_pieces' => $request->input('count_total_pieces'),
                    'count_total_carton' => $request->input('count_total_carton'),
                    'count_check_carton' => $request->input('count_check_carton'),
                    'count_check_pieces' => $request->input('count_check_pieces'),
                    'count_defect_carton' => $request->input('count_defect_carton'),
                    'count_defect_pieces' => $request->input('count_defect_pieces'),
                );

                $qualityRecordCNIObject = QualityRecordCNI::create( $dataArray );
                unset($dataArray);
                $data['quality_record_c_n_i_object'] = $qualityRecordCNIObject;
                
                $defect_id_array = array();
                
                if( (($request->has('defect_id')) && ($request->filled('defect_id'))) ){
                    $defect_id_array = (array) $request->input('defect_id');
                }
                
                foreach($defect_id_array as $key => $value){
                    $defectObject = Defect::where("id", "=", $value)->first();
                    
                    $qualityRecordDataCNIObject = $qualityRecordCNIObject->qualityRecordDataCNI()->create([
                        'is_visible' => true,
                        'is_active' => true,
                        'time_create' => $date_today->format('Y-m-d H:i:s'),
                        'quality_record_c_n_i_id' => $qualityRecordCNIObject->id,
                        'user_id_create' => auth()->user()->id,
                        'defect_category_id' => $defectObject->defect_category_id,
                        'defect_id' => $defectObject->id,
                        'count_defect' => $request->input('count_defect'),
                        'severity' => $request->input('severity'),
                        'action_to_be_taken' => $request->input('action_to_be_taken')
                    ]);
                    
                    $qualityRecordCNIObject->qualityRecordDataCNI()->save($qualityRecordDataCNIObject);
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
        
        if( (Route::has('qualityRecordCNI.index')) ){
            return redirect()->route('qualityRecordCNI.index');
        }else{
            return redirect()->back()->withInput();
        }
    }
    
}
