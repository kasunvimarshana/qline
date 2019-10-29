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
                
                $query = null;
                $qualityRecordCuttingObject = new QualityRecordCutting();
                $qualityRecordRQCObject = new QualityRecordRQC();
                $qualityRecordSewingCheckObject = new QualityRecordSewingCheck();
                $qualityRecordSewingAuditObject = new QualityRecordSewingAudit();
                $qualityRecordFinishingObject = new QualityRecordFinishing();
                $qualityRecordCNIObject = new QualityRecordCNI();
                
                /*
                $qualityRecordCuttingObject = $qualityRecordCuttingObject->with(array(
                    'company' => function($query){
                        //$query = $query->addSelect(['id']);
                    }
                ));
                $qualityRecordRQCObject = $qualityRecordRQCObject->with(array(
                    'company' => function($query){
                        //$query = $query->addSelect(['id']);
                    }
                ));
                $qualityRecordSewingCheckObject = $qualityRecordSewingCheckObject->with(array(
                    'company' => function($query){
                        //$query = $query->addSelect(['id']);
                    }
                ));
                $qualityRecordSewingAuditObject = $qualityRecordSewingAuditObject->with(array(
                    'company' => function($query){
                        //$query = $query->addSelect(['id']);
                    }
                ));
                $qualityRecordFinishingObject = $qualityRecordFinishingObject->with(array(
                    'company' => function($query){
                        //$query = $query->addSelect(['id']);
                    }
                ));
                $qualityRecordCNIObject = $qualityRecordCNIObject->with(array(
                    'company' => function($query){
                        //$query = $query->addSelect(['id']);
                    }
                ));
                */
                
                /* quality_records */
                /*
                $qualityRecordObject = $qualityRecordObject->join(
                    'companies as companies',
                    function ($join) {
                        $join->on('companies.id', '=', 'quality_records.company_id');
                        //$join->orOn('companies.id', '=', 'quality_records.company_id');
                    }
                );
                */
                
                /* quality_record_cuttings */
                $qualityRecordCuttingObject = $qualityRecordCuttingObject->join(
                    'companies as companies',
                    function ($join) {
                        $join->on('companies.id', '=', 'quality_record_cuttings.company_id');
                    }
                )
                ->join(
                    'strategic_business_units as strategic_business_units',
                    function ($join) {
                        $join->on('strategic_business_units.id', '=', 'quality_record_cuttings.strategic_business_unit_id');
                    }
                )
                ->join(
                    'factories as factories',
                    function ($join) {
                        $join->on('factories.id', '=', 'quality_record_cuttings.factory_id');
                    }
                )
                ->join(
                    'lines as lines',
                    function ($join) {
                        $join->on('lines.id', '=', 'quality_record_cuttings.line_id');
                    }
                );
                
                /* quality_record_r_q_c_s */
                $qualityRecordRQCObject = $qualityRecordRQCObject->join(
                    'companies as companies',
                    function ($join) {
                        $join->on('companies.id', '=', 'quality_record_r_q_c_s.company_id');
                    }
                );
                
                /* quality_record_sewing_checks */
                $qualityRecordSewingCheckObject = $qualityRecordSewingCheckObject->join(
                    'companies as companies',
                    function ($join) {
                        $join->on('companies.id', '=', 'quality_record_sewing_checks.company_id');
                    }
                );
                
                /* quality_record_sewing_audits */
                $qualityRecordSewingAuditObject = $qualityRecordSewingAuditObject->join(
                    'companies as companies',
                    function ($join) {
                        $join->on('companies.id', '=', 'quality_record_sewing_audits.company_id');
                    }
                );
                
                /* quality_record_finishings */
                $qualityRecordFinishingObject = $qualityRecordFinishingObject->join(
                    'companies as companies',
                    function ($join) {
                        $join->on('companies.id', '=', 'quality_record_finishings.company_id');
                    }
                );
                
                /* quality_record_c_n_i_s */
                $qualityRecordCNIObject = $qualityRecordCNIObject->join(
                    'companies as companies',
                    function ($join) {
                        $join->on('companies.id', '=', 'quality_record_c_n_i_s.company_id');
                    }
                );
                
                $qualityRecordCuttingObject = $qualityRecordCuttingObject->addSelect([
                    'quality_record_cuttings.id as id',
                    'companies.code as companies_code'
                ]);
                
                $qualityRecordRQCObject = $qualityRecordRQCObject->addSelect([
                    'quality_record_r_q_c_s.id as id',
                    'companies.code as companies_code',
                ]);
                
                $qualityRecordSewingCheckObject = $qualityRecordSewingCheckObject->addSelect([
                    'quality_record_sewing_checks.id as id',
                    'companies.code as companies_code',
                ]);
                
                $qualityRecordSewingAuditObject = $qualityRecordSewingAuditObject->addSelect([
                    'quality_record_sewing_audits.id as id',
                    'companies.code as companies_code',
                ]);
                
                $qualityRecordFinishingObject = $qualityRecordFinishingObject->addSelect([
                    'quality_record_finishings.id as id',
                    'companies.code as companies_code',
                ]);
                
                $qualityRecordCNIObject = $qualityRecordCNIObject->addSelect([
                    'quality_record_c_n_i_s.id as id',
                    'companies.code as companies_code',
                ]);
                
                
                
                $query = $qualityRecordCuttingObject;
                $query = $query->unionAll($qualityRecordRQCObject);
                $query = $query->unionAll($qualityRecordSewingCheckObject);
                $query = $query->unionAll($qualityRecordSewingAuditObject);
                $query = $query->unionAll($qualityRecordFinishingObject);
                $query = $query->unionAll($qualityRecordCNIObject);
                
                $querySql = $query->toSql();
                $query_all_content = DB::table(DB::raw("({$querySql}) as query"))
                    ->mergeBindings($query->getQuery())
                    ->selectRaw("query.*");
                
                dd($query_all_content->get());
                
                //$data['object'] = $objrct;
                unset($dataArray);
                
                // Commit transaction!
                //DB::commit();
            }catch(Exception $e){dd($e);
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
