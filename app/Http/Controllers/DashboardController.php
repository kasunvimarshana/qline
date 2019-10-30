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

use Maatwebsite\Excel\Facades\Excel;

use App\QualityRecordCutting;
use App\QualityRecordDataCutting;
use App\QualityRecordRQC;
use App\QualityRecordDataRQC;
use App\QualityRecordSewingCheck;
use App\QualityRecordDataSewingCheck;
use App\QualityRecordSewingAudit;
use App\QualityRecordDataSewingAudit;
use App\QualityRecordFinishing;
use App\QualityRecordDataFinishing;
use App\QualityRecordCNI;
use App\QualityRecordDataCNI;
use App\Exports\ReportExport;

class DashboardController extends Controller
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
    
    public function index(Request $request){ /*return response()->json( $request );*/ 
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        if(view()->exists('dashboard')){
            return View::make('dashboard', array());
        }else{
            return redirect()->back()->withInput();
        }
    } 
    
    public function createWorkbook(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        $carbonObject = new Carbon();
        
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
                //DB::beginTransaction();
                
                $qualityRecordCuttingObject = new QualityRecordCutting();
                $qualityRecordRQCObject = new QualityRecordRQC();
                $qualityRecordSewingCheckObject = new QualityRecordSewingCheck();
                $qualityRecordSewingAuditObject = new QualityRecordSewingAudit();
                $qualityRecordFinishingObject = new QualityRecordFinishing();
                $qualityRecordCNIObject = new QualityRecordCNI();
                
                $qualityRecordCuttingObject = $qualityRecordCuttingObject->with(['company', 'strategicBusinessUnit', 'factory', 'line', 'customer', 'inspectionStage', 'style', 'qualityRecordDataCutting']);
                $qualityRecordRQCObject = $qualityRecordRQCObject->with(['company', 'strategicBusinessUnit', 'factory', 'line', 'customer', 'inspectionStage', 'style', 'qualityRecordDataRQC']);
                $qualityRecordSewingCheckObject = $qualityRecordSewingCheckObject->with(['company', 'strategicBusinessUnit', 'factory', 'line', 'customer', 'inspectionStage', 'style', 'qualityRecordDataSewingCheck']);
                $qualityRecordSewingAuditObject = $qualityRecordSewingAuditObject->with(['company', 'strategicBusinessUnit', 'factory', 'line', 'customer', 'inspectionStage', 'style', 'qualityRecordDataSewingAudit']);
                $qualityRecordFinishingObject = $qualityRecordFinishingObject->with(['company', 'strategicBusinessUnit', 'factory', 'line', 'customer', 'inspectionStage', 'style', 'qualityRecordDataFinishing']);
                $qualityRecordCNIObject = $qualityRecordCNIObject->with(['company', 'strategicBusinessUnit', 'factory', 'line', 'customer', 'inspectionStage', 'style', 'qualityRecordDataCNI']);
                
                $data = array();
                
                $headings = array(
                    'Reference Number', 
                    'SBU Name', 
                    'Factory', 
                    'Sewing Line/ Finshing Line', 
                    'Date', 
                    'Customer', 
                    'Inspection', 
                    'Style', 
                    'Total Audits', 
                    'Total Pass', 
                    'Inspected Quantity', 
                    'Defect Catogory', 
                    'Operation/ Area/ POM', 
                    'Defect', 
                    'Number Of Defects'
                );
                
                $data[] = $headings;
                
                $qualityRecordCuttingObjectArray = $qualityRecordCuttingObject->get();
                $qualityRecordRQCObjectArray = $qualityRecordRQCObject->get();
                $qualityRecordSewingCheckObjectArray = $qualityRecordSewingCheckObject->get();
                $qualityRecordSewingAuditObjectArray = $qualityRecordSewingAuditObject->get();
                $qualityRecordFinishingObjectArray = $qualityRecordFinishingObject->get();
                $qualityRecordCNIObjectArray = $qualityRecordCNIObject->get();
                
                /*
                foreach($qualityRecordCuttingObjectArray as $key => $value){
                    $data_temp_1 = array(
                        $value->id,
                        ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                        ($value->factory)?($value->factory->code):null,
                        ($value->line)?($value->line->code):null,
                        $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                        ($value->customer)?($value->customer->code):null,
                        ($value->inspectionStage)?($value->inspectionStage->code):null,
                        ($value->style)?($value->style->code):null,
                        $value->quantity_audit,
                        $value->quantity_pass,
                        $value->quantity_inspect,
                        null,
                        null,
                        null,
                        null,
                    );
                    
                    $data[] = $data_temp_1;
                    
                    unset( $data_temp_1 );
                }
                */
                
                foreach($qualityRecordRQCObjectArray as $key => $value){
                    $data_temp_1 = array(
                        $value->id,
                        ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                        ($value->factory)?($value->factory->code):null,
                        ($value->line)?($value->line->code):null,
                        $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                        ($value->customer)?($value->customer->code):null,
                        ($value->inspectionStage)?($value->inspectionStage->code):null,
                        ($value->style)?($value->style->code):null,
                        $value->quantity_audit,
                        $value->quantity_pass,
                        $value->quantity_inspect,
                        null,
                        null,
                        null,
                        null,
                    );
                    
                    $data[] = $data_temp_1;
                    unset( $data_temp_1 );
                    
                    if( ($value->qualityRecordDataRQC) ){
                        foreach($value->qualityRecordDataRQC as $key_1 => $value_1){
                            
                            $value_1->load(['measurePoint', 'defectCategory', 'defect']);
                            
                            $data_temp_1 = array(
                                $value->id,
                                ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                                ($value->factory)?($value->factory->code):null,
                                ($value->line)?($value->line->code):null,
                                $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                                ($value->customer)?($value->customer->code):null,
                                ($value->inspectionStage)?($value->inspectionStage->code):null,
                                ($value->style)?($value->style->code):null,
                                //$value->quantity_audit,
                                //$value->quantity_pass,
                                //$value->quantity_inspect,
                                null,
                                null,
                                null,
                                ($value_1->defectCategory)?($value_1->defectCategory->code):null,
                                ($value_1->measurePoint)?($value_1->measurePoint->code):null,
                                ($value_1->defect)?($value_1->defect->code):null,
                                $value_1->count_defect,
                            );

                            $data[] = $data_temp_1;
                            unset( $data_temp_1 );
                        }
                    }
                }
                
                foreach($qualityRecordSewingCheckObjectArray as $key => $value){
                    $data_temp_1 = array(
                        $value->id,
                        ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                        ($value->factory)?($value->factory->code):null,
                        ($value->line)?($value->line->code):null,
                        $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                        ($value->customer)?($value->customer->code):null,
                        ($value->inspectionStage)?($value->inspectionStage->code):null,
                        ($value->style)?($value->style->code):null,
                        $value->quantity_audit,
                        $value->quantity_pass,
                        $value->quantity_inspect,
                        null,
                        null,
                        null,
                        null,
                    );
                    
                    $data[] = $data_temp_1;
                    unset( $data_temp_1 );
                    
                    if( ($value->qualityRecordDataSewingCheck) ){
                        foreach($value->qualityRecordDataSewingCheck as $key_1 => $value_1){
                            
                            $value_1->load(['measurePoint', 'defectCategory', 'defect']);
                            
                            $data_temp_1 = array(
                                $value->id,
                                ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                                ($value->factory)?($value->factory->code):null,
                                ($value->line)?($value->line->code):null,
                                $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                                ($value->customer)?($value->customer->code):null,
                                ($value->inspectionStage)?($value->inspectionStage->code):null,
                                ($value->style)?($value->style->code):null,
                                //$value->quantity_audit,
                                //$value->quantity_pass,
                                //$value->quantity_inspect,
                                null,
                                null,
                                null,
                                ($value_1->defectCategory)?($value_1->defectCategory->code):null,
                                ($value_1->measurePoint)?($value_1->measurePoint->code):null,
                                ($value_1->defect)?($value_1->defect->code):null,
                                $value_1->count_defect,
                            );

                            $data[] = $data_temp_1;
                            unset( $data_temp_1 );
                        }
                    }
                }
                
                foreach($qualityRecordSewingAuditObjectArray as $key => $value){
                    $data_temp_1 = array(
                        $value->id,
                        ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                        ($value->factory)?($value->factory->code):null,
                        ($value->line)?($value->line->code):null,
                        $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                        ($value->customer)?($value->customer->code):null,
                        ($value->inspectionStage)?($value->inspectionStage->code):null,
                        ($value->style)?($value->style->code):null,
                        $value->quantity_audit,
                        $value->quantity_pass,
                        $value->quantity_inspect,
                        null,
                        null,
                        null,
                        null,
                    );
                    
                    $data[] = $data_temp_1;
                    unset( $data_temp_1 );
                    
                    if( ($value->qualityRecordDataSewingAudit) ){
                        foreach($value->qualityRecordDataSewingAudit as $key_1 => $value_1){
                            
                            $value_1->load(['measurePoint', 'defectCategory', 'defect']);
                            
                            $data_temp_1 = array(
                                $value->id,
                                ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                                ($value->factory)?($value->factory->code):null,
                                ($value->line)?($value->line->code):null,
                                $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                                ($value->customer)?($value->customer->code):null,
                                ($value->inspectionStage)?($value->inspectionStage->code):null,
                                ($value->style)?($value->style->code):null,
                                //$value->quantity_audit,
                                //$value->quantity_pass,
                                //$value->quantity_inspect,
                                null,
                                null,
                                null,
                                ($value_1->defectCategory)?($value_1->defectCategory->code):null,
                                ($value_1->measurePoint)?($value_1->measurePoint->code):null,
                                ($value_1->defect)?($value_1->defect->code):null,
                                $value_1->count_defect,
                            );

                            $data[] = $data_temp_1;
                            unset( $data_temp_1 );
                        }
                    }
                }
                
                foreach($qualityRecordFinishingObjectArray as $key => $value){
                    $data_temp_1 = array(
                        $value->id,
                        ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                        ($value->factory)?($value->factory->code):null,
                        ($value->line)?($value->line->code):null,
                        $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                        ($value->customer)?($value->customer->code):null,
                        ($value->inspectionStage)?($value->inspectionStage->code):null,
                        ($value->style)?($value->style->code):null,
                        $value->quantity_audit,
                        $value->quantity_pass,
                        $value->quantity_inspect,
                        null,
                        null,
                        null,
                        null,
                    );
                    
                    $data[] = $data_temp_1;
                    unset( $data_temp_1 );
                    
                    if( ($value->qualityRecordDataFinishing) ){
                        foreach($value->qualityRecordDataFinishing as $key_1 => $value_1){
                            
                            $value_1->load(['measurePoint', 'defectCategory', 'defect']);
                            
                            $data_temp_1 = array(
                                $value->id,
                                ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                                ($value->factory)?($value->factory->code):null,
                                ($value->line)?($value->line->code):null,
                                $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                                ($value->customer)?($value->customer->code):null,
                                ($value->inspectionStage)?($value->inspectionStage->code):null,
                                ($value->style)?($value->style->code):null,
                                //$value->quantity_audit,
                                //$value->quantity_pass,
                                //$value->quantity_inspect,
                                null,
                                null,
                                null,
                                ($value_1->defectCategory)?($value_1->defectCategory->code):null,
                                ($value_1->measurePoint)?($value_1->measurePoint->code):null,
                                ($value_1->defect)?($value_1->defect->code):null,
                                $value_1->count_defect,
                            );

                            $data[] = $data_temp_1;
                            unset( $data_temp_1 );
                        }
                    }
                }
                
                foreach($qualityRecordCNIObjectArray as $key => $value){
                    $data_temp_1 = array(
                        $value->id,
                        ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                        ($value->factory)?($value->factory->code):null,
                        ($value->line)?($value->line->code):null,
                        $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                        ($value->customer)?($value->customer->code):null,
                        ($value->inspectionStage)?($value->inspectionStage->code):null,
                        ($value->style)?($value->style->code):null,
                        $value->count_check_pieces,
                        $value->quantity_pass,
                        $value->count_total_pieces,
                        null,
                        null,
                        null,
                        null,
                    );
                    
                    $data[] = $data_temp_1;
                    unset( $data_temp_1 );
                    
                    if( ($value->qualityRecordDataCNI) ){
                        foreach($value->qualityRecordDataCNI as $key_1 => $value_1){
                            
                            $value_1->load(['measurePoint', 'defectCategory', 'defect']);
                            
                            $data_temp_1 = array(
                                $value->id,
                                ($value->strategicBusinessUnit)?($value->strategicBusinessUnit->code):null,
                                ($value->factory)?($value->factory->code):null,
                                ($value->line)?($value->line->code):null,
                                $carbonObject->createFromFormat("Y-m-d H:i:s", $value->time_create),
                                ($value->customer)?($value->customer->code):null,
                                ($value->inspectionStage)?($value->inspectionStage->code):null,
                                ($value->style)?($value->style->code):null,
                                //$value->quantity_audit,
                                //$value->quantity_pass,
                                //$value->quantity_inspect,
                                null,
                                null,
                                null,
                                ($value_1->defectCategory)?($value_1->defectCategory->code):null,
                                ($value_1->measurePoint)?($value_1->measurePoint->code):null,
                                ($value_1->defect)?($value_1->defect->code):null,
                                $value_1->count_defect,
                            );

                            $data[] = $data_temp_1;
                            unset( $data_temp_1 );
                        }
                    }
                }
                
                // Generate and return the spreadsheet
                $export = new ReportExport( $data );
                return Excel::download($export, 'report.xlsx');
                
                //$data['object'] = $objrct;
                unset($dataArray);
                
                // Commit transaction!
                //DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                //DB::rollback(); 
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
        return redirect()->back()->withInput();
    }
    
}
