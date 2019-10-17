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
}
