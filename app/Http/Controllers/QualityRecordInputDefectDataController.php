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
use App\QualityRecoredInputDefectData as QualityRecoredInputDefectData;
use App\Line;
use App\Customer;
use App\Style;
use App\Colour;
use App\Export;
use App\User;

use Symfony\Component\HttpFoundation\StreamedResponse as StreamedResponse;

class QualityRecordInputDefectDataController extends Controller
{
    //
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
            'code' => 'required',
            'line_id' => 'required|exists:lines,code'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data = array(
                'title' => 'error',
                'text' => $validator->errors()->first(),
                'type' => 'warning',
                'timer' => 3000
            );
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $lineObject = new Line();
                $lineObject = $lineObject->where('code', '=', $request->input('line_id'))->first();
                $lineObject->load(['company', 'strategicBusinessUnit', 'factory', 'lineMetaData']);
                $data["line_object"] = $lineObject;
                
                if( ($lineObject) ){
                    
                    $dataArray = array(
                        'is_visible' => true,
                        'is_active' => true,
                        'time_create' => $request->input('time_create', $date_today->format('Y-m-d H:i:s')),
                        'code' => $request->input('code'),
                        'count_data' => $request->input('count_data'),
                        'line_id' => $lineObject->id,
                        'ip_address' => $request->ip()
                    );
                    
                    if( ($lineObject->company) ){
                        $company = $lineObject->company;
                        $dataArray['company_id'] = $company->id;
                    }
                    
                    if( ($lineObject->strategicBusinessUnit) ){
                        $strategicBusinessUnit = $lineObject->strategicBusinessUnit;
                        $dataArray['strategic_business_unit_id'] = $strategicBusinessUnit->id;
                    }
                    
                    if( ($lineObject->factory) ){
                        $factory = $lineObject->factory;
                        $dataArray['factory_id'] = $factory->id;
                    }
                    
                    // user_id_create
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "user_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $userObject = new User();
                        $userObject = $userObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $dataArray['user_id_create'] = $userObject->id;
                    }
                    
                    // customer_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "customer_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $customerObject = new Customer();
                        $customerObject = $customerObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $dataArray['customer_id'] = $customerObject->id;
                    }
                    
                    // style_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "style_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $styleObject = new Style();
                        $styleObject = $styleObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $dataArray['style_id'] = $styleObject->id;
                    }
                    
                    // colour_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "colour_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $colourObject = new Colour();
                        $colourObject = $colourObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $dataArray['colour_id'] = $colourObject->id;
                    }
                    
                    // export_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "export_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $exportObject = new Export();
                        $exportObject = $exportObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $dataArray['export_id'] = $exportObject->id;
                    }
                    
                    $qualityRecoredInputDefectDataObject = $lineObject->qualityRecoredInputDefectData()->create( $dataArray );
                    
                    $lineObject->qualityRecoredInputDefectData()->save( $qualityRecoredInputDefectDataObject );
                }else{
                    throw new Exception("exception");
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
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        $data = array(
            'title' => 'success',
            'text' => 'success',
            'type' => 'success',
            'timer' => 3000
        );
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
    }
    
    //other
    public function selectAllQualityRecordInputDefectData(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        // Solution to get around integer overflow errors
        // $model->latest()->limit(PHP_INT_MAX)->offset(1)->get();
        // function will process the ajax request
        $draw = null;
        $start = 0;
        $length = 0;
        $search = null;
        $recordsTotal = 0;
        $recordsFiltered = 0;
        $query = null;
        $queryResult = null;
        //$recordsTotal = Model::where('active','=','1')->count();
        
        // validate the info, create rules for the inputs
        $rules = array();
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            $data['message_error'] = $validator->errors()->first();
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
        } else {
            // do process
            try {
                // Start transaction!
                //DB::beginTransaction();
                //DB::transaction(function () use (&$data){});
                $qualityRecoredInputDefectDataObject = new QualityRecoredInputDefectData();
                $query = $qualityRecoredInputDefectDataObject;
                /*
                $query = $company->where('is_visible', '=', true);
                $query = $company->where('is_active', '=', true);
                */
                //$query = $query->where('is_visible', '=', $request->input('is_visible', true));
                //$query = $query->where('is_active', '=', $request->input('is_visible', true));
                // is_visible
                if( ($request->has('is_visible')) && ($request->filled('is_visible')) ){
                    $is_visible_val_true = "true";
                    $is_visible_val_false = "false";
                    $is_visible_val_temp = $request->input('is_visible');
                    if( (strcasecmp($is_visible_val_temp, $is_visible_val_true) == 0) ){
                        $query = $query->where('is_visible', '=', true);
                    }else if( (strcasecmp($is_visible_val_temp, $is_visible_val_false) == 0) ){
                        $query = $query->where('is_visible', '=', false);
                    }else{
                        $query = $query->where('is_visible', '=', true);
                    }
                }else{
                    $query = $query->where('is_visible', '=', true);
                }
                
                // is_active
                if( ($request->has('is_active')) && ($request->filled('is_active')) ){
                    $is_active_val_true = "true";
                    $is_active_val_false = "false";
                    $is_active_val_temp = $request->input('is_active');
                    if( (strcasecmp($is_active_val_temp, $is_active_val_true) == 0) ){
                        $query = $query->where('is_active', '=', true);
                    }else if( (strcasecmp($is_active_val_temp, $is_active_val_false) == 0) ){
                        $query = $query->where('is_active', '=', false);
                    }else{
                        $query = $query->where('is_active', '=', true);
                    }
                }else{
                    $query = $query->where('is_active', '=', true);
                }
                
                $recordsTotal = $query->count();
                $recordsFiltered = $recordsTotal;
                
                // get search query value
                if( ($request->has('search')) && ($request->filled('search')) ){
                    $search = $request->input('search');
                    if( $search && (@key_exists('value', $search)) ){
                        $search = $search['value'];
                    }
                    if($search && (!empty($search))){
                        //$search = (string) $search;
                        $query = $query->where('code', 'like', '%' . $search . '%');
                    }
                }
                
                // created_at
                if( ($request->has('created_at')) && ($request->filled('created_at')) ){
                    $created_at = $request->input('created_at');
                    $query = $query->where('created_at', '=', $created_at);
                }
                
                // updated_at
                if( ($request->has('updated_at')) && ($request->filled('updated_at')) ){
                    $updated_at = $request->input('updated_at');
                    $query = $query->where('updated_at', '=', $updated_at);
                }
                
                // id
                if( ($request->has('id')) && ($request->filled('id')) ){
                    $id = $request->input('id');
                    $query = $query->where('id', '=', $id);
                }
                
                // code
                if( ($request->has('code')) && ($request->filled('code')) ){
                    $code = $request->input('code');
                    $query = $query->where('code', '=', $code);
                }
                
                // time_create
                if( ($request->has('time_create')) && ($request->filled('time_create')) ){
                    $time_create = $request->input('time_create');
                    $query = $query->where('time_create', '=', $time_create);
                }
                
                // count_data
                if( ($request->has('count_data')) && ($request->filled('count_data')) ){
                    $count_data = $request->input('count_data');
                    $query = $query->where('count_data', '=', $count_data);
                }
                
                // company_id
                if( ($request->has('company_id')) && ($request->filled('company_id')) ){
                    $company_id = $request->input('company_id');
                    $query = $query->where('company_id', '=', $company_id);
                }
                
                // strategic_business_unit_id
                if( ($request->has('strategic_business_unit_id')) && ($request->filled('strategic_business_unit_id')) ){
                    $strategic_business_unit_id = $request->input('strategic_business_unit_id');
                    $query = $query->where('strategic_business_unit_id', '=', $strategic_business_unit_id);
                }
                
                // factory_id
                if( ($request->has('factory_id')) && ($request->filled('factory_id')) ){
                    $factory_id = $request->input('factory_id');
                    $query = $query->where('factory_id', '=', $factory_id);
                }
                
                // line_id
                if( ($request->has('line_id')) && ($request->filled('line_id')) ){
                    $line_id = $request->input('line_id');
                    $query = $query->where('line_id', '=', $line_id);
                }
                
                // customer_id
                if( ($request->has('customer_id')) && ($request->filled('customer_id')) ){
                    $customer_id = $request->input('customer_id');
                    $query = $query->where('customer_id', '=', $customer_id);
                }
                
                // style_id
                if( ($request->has('style_id')) && ($request->filled('style_id')) ){
                    $style_id = $request->input('style_id');
                    $query = $query->where('style_id', '=', $style_id);
                }
                
                // colour_id
                if( ($request->has('colour_id')) && ($request->filled('colour_id')) ){
                    $colour_id = $request->input('colour_id');
                    $query = $query->where('colour_id', '=', $colour_id);
                }
                
                // export_id
                if( ($request->has('export_id')) && ($request->filled('export_id')) ){
                    $export_id = $request->input('export_id');
                    $query = $query->where('export_id', '=', $export_id);
                }
                
                // user_id_create
                if( ($request->has('user_id_create')) && ($request->filled('user_id_create')) ){
                    $user_id_create = $request->input('user_id_create');
                    $query = $query->where('user_id_create', '=', $user_id_create);
                }
                
                // ip_address
                if( ($request->has('ip_address')) && ($request->filled('ip_address')) ){
                    $ip_address = $request->input('ip_address');
                    $query = $query->where('ip_address', '=', $ip_address);
                }
                
                // status_id
                if( ($request->has('status_id')) && ($request->filled('status_id')) ){
                    $status_id = $request->input('status_id');
                    $query = $query->where('status_id', '=', $status_id);
                }

                // get filtered record count
                $recordsFiltered = $query->count();

                // get limit value
                if( ($request->has('length')) && ($request->filled('length')) ){
                    $length = intval( $request->input('length') );
                    $length = abs( $length );
                    $query = $query->limit($length);
                }
                // set default value for length (PHP_INT_MAX)
                if( $length <= 0 ){
                    $length = PHP_INT_MAX;
                    $length = abs( $length );
                    //$length = 0;
                }

                // get offset value
                if( ($request->has('start')) && ($request->filled('start')) ){
                    $start = intval( $request->input('start') );
                    $start = abs( $start );
                }else if( ($request->has('page')) && ($request->filled('page')) ){
                    $start = intval( $request->input('page') );
                    //$start = abs( ( ( $start - 1 ) * $length ) );
                    $start = ( ( $start - 1 ) * $length );
                    $start = abs( $start );
                }

                // filter with offset value
                if( $start > 0 ){
                    //$query = $query->limit($length)->skip($start);
                    $query = $query->limit($length)->offset($start);
                }else if( $length > 0 ){
                    $query = $query->limit($length);
                }

                // order
                //$query->orderBy('id', 'desc');
                $query->orderBy('updated_at', 'desc');

                // get data
                $queryResult = $query->get();

                $recordsTotal = $recordsFiltered;
                
                $draw = $request->input('draw');
                
                $data = array(
                    'draw' => $draw,
                    'start' => $start,
                    'page' => $start,
                    'length' => $length,
                    'search' => $search,
                    'recordsTotal' => $recordsTotal,
                    'recordsFiltered' => $recordsFiltered,
                    'data' => $queryResult,
                    'pagination' => array(
                        'more' => ( ($start) < ($recordsFiltered) ) ? true : false
                    )
                );

                // Commit transaction!
                //DB::commit();
                //return Response::json( $data );
            }catch(Exception $e){
                // Rollback transaction!
                //DB::rollback(); 
                //return redirect()->back()->withInput();
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
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
    }
    
    //other
    public function selectQualityRecordInputDefectData(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        $streamedResponseObject = new StreamedResponse();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'line_id' => 'required|exists:lines,id'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
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
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $lineObject = new Line();
                $lineObject = $lineObject->where('id', '=', $request->input('line_id'))->first();
                $lineObject->load(['company', 'strategicBusinessUnit', 'factory', 'lineMetaData', 'qualityRecoredInputDefectData']);
                //$data["line_object"] = $lineObject;
                $qualityRecoredInputDefectDataObject = null;
                
                if( ($lineObject) ){
                    
                    $qualityRecoredInputDefectDataObject = $lineObject->qualityRecoredInputDefectData();
                    
                    if( ($lineObject->company) ){
                        $company = $lineObject->company;
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("company_id", "=", $company->id);
                    }
                    
                    if( ($lineObject->strategicBusinessUnit) ){
                        $strategicBusinessUnit = $lineObject->strategicBusinessUnit;
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("strategic_business_unit_id", "=", $strategicBusinessUnit->id);
                    }
                    
                    if( ($lineObject->factory) ){
                        $factory = $lineObject->factory;
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("factory_id", "=", $factory->id);
                    }
                    
                    // customer_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "customer_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $customerObject = new Customer();
                        $customerObject = $customerObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("customer_id", "=", $customerObject->id);
                    }
                    
                    // style_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "style_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $styleObject = new Style();
                        $styleObject = $styleObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("style_id", "=", $styleObject->id);
                    }
                    
                    // colour_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "colour_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $colourObject = new Colour();
                        $colourObject = $colourObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("colour_id", "=", $colourObject->id);
                    }
                    
                    // export_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "export_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $exportObject = new Export();
                        $exportObject = $exportObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("export_id", "=", $exportObject->id);
                    }
                    
                    $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("is_active", "=", true);
                    
                    $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject
                        ->whereDate('time_create', '=', $date_today->format('Y-m-d'));
                    
                    $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->first();
                    $data["quality_recored_input_defect_data_object"] = $qualityRecoredInputDefectDataObject;
                }else{
                    throw new Exception("exception");
                }

                unset($dataArray);
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
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
        /*
        $data = array(
            'title' => 'success',
            'text' => 'success',
            'type' => 'success',
            'timer' => 3000
        );
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
        */
        $streamedResponseObject->setCallback(function() use($data){
            $retry_value = 3000;
            echo "data: " . json_encode( $data );
            echo PHP_EOL;
            //echo "event: ". "select";
            echo PHP_EOL;
            echo "retry: ". "{$retry_value}";
            
            /*
            ob_flush();
            flush();
            usleep(100000);
            */
            
            ob_end_flush();
            flush();
            //sleep(1);
            
            unset( $data );
        });
        
        $streamedResponseObject->headers->set("Content-Type", "text/event-stream");
        $streamedResponseObject->headers->set("Cache-Control", "no-cache");
        $streamedResponseObject->headers->set("Access-Control-Allow-Origin", "*");
        
        $streamedResponseObject->send();
    }
    
}
