<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Str;
use \StdClass;
use \Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session as Session;
use Excel as Excel;
use App\User as User;

class UserSyncCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $resultDataArray = array();
        $userDataResourceArray = array(
            array(
                'sbu' => 'BLI',
                'host' => '10.150.152.14',
                'file_uri_user_hcm' => '/userdata$/Common_Share/ICT/Employee_Reconciliation/HCM.xls',
                'file_uri_user_ad' => '/userdata$/Common_Share/ICT/Employee_Reconciliation/BLI-Users.csv'
            )
        );

        foreach( $userDataResourceArray as $keyTempUserData => $valueTempUserData ){

            try{

                $sbu = $valueTempUserData['sbu'];
                $host = gethostbyaddr( $valueTempUserData['host'] );
                $file_uri_user_hcm = "//" . $host . $valueTempUserData['file_uri_user_hcm'];
                $file_uri_user_ad = "//" . $host . $valueTempUserData['file_uri_user_ad'];

                //$array = Excel::toArray(new Import, $file);
                //$array = Excel::toCollection(new Import, $file);

                //$content = File::lastModified( $file_uri );
                //$content = File::isFile( $file_uri );
                //$content = File::extension( $file_uri );
                //$content = File::basename( $file_uri );
                //$content = File::name( $file_uri );
                //$content = File::exists( $file_uri );
                //$content = File::isReadable( $file_uri );

                //$dt1 = Carbon::now()->startOfDay();
                //$dt2 = $dt1->copy()->timestamp( $content );
                //$dt2 = $dt1->copy()->setTimestamp( $content )->startOfDay();
                //$dt1->greaterThan( $dt2 );
                /*
                $date_today = Carbon::now()->startOfDay();
                $date_timestamp_last_modified_hcm = $date_today->timestamp; //File::lastModified( $file_uri_user_hcm );
                $date_timestamp_last_modified_ad = $date_today->timestamp; //File::lastModified( $file_uri_user_ad );

                if( File::exists( $file_uri_user_hcm ) ){
                    $date_timestamp_last_modified_hcm = File::lastModified( $file_uri_user_hcm );
                }

                if( File::exists( $file_uri_user_ad ) ){
                    $date_timestamp_last_modified_ad = File::lastModified( $file_uri_user_ad );
                }

                $date_last_modified_hcm = $date_today->copy()->setTimestamp( $date_timestamp_last_modified_hcm )->startOfDay();
                $date_last_modified_ad = $date_today->copy()->setTimestamp( $date_timestamp_last_modified_ad )->startOfDay();

                $resultDataArray['check_user_data'] = $valueTempUserData;
                $resultDataArray['date_today'] = $date_today;
                $resultDataArray['date_last_modified_hcm'] = $date_last_modified_hcm;
                $resultDataArray['date_last_modified_ad'] = $date_last_modified_ad;

                $temp1 = Excel::toArray([], $file_uri_user_hcm);
                $temp1 = Excel::toArray([], $file_uri_user_ad);
                */

                if( (!File::exists( $file_uri_user_hcm )) ){
                    throw new Exception("exception");
                }

                if( (!File::exists( $file_uri_user_ad )) ){
                    throw new Exception("exception");
                }
                
                $temp_user_array_hcm = Excel::toArray([], $file_uri_user_hcm);
                $temp_user_array_ad = Excel::toArray([], $file_uri_user_ad);
                $temp_user_array_hcm = array_pop(($temp_user_array_hcm));
                $temp_user_array_ad = array_pop(($temp_user_array_ad));
                foreach($temp_user_array_hcm as $key_temp_user_hcm => $value_temp_user_hcm){
                    try{
                        //
                        // Start transaction!
                        DB::beginTransaction();
                        $temp_employee_number = $value_temp_user_hcm[0];
                        $temp_epf_number = $value_temp_user_hcm[1];
                        $temp_full_name = $value_temp_user_hcm[2];
                        $temp_designation = $value_temp_user_hcm[3];
                        $temp_department = $value_temp_user_hcm[4];
                        $temp_roster = $value_temp_user_hcm[5];
                        if( (isset($temp_epf_number)) && (!empty($temp_epf_number)) ){
                            $newUser = User::updateOrCreate([
                                'id' => $temp_epf_number
                            ], [
                                'id' => $temp_epf_number,
                                'code' => $temp_epf_number,
                                'is_visible' => true,
                                'is_active' => true,
                                'code' => $temp_epf_number,
                                'code_epf' => $temp_epf_number,
                                'name_first' => $temp_full_name,
                                //'name_last' => $temp_full_name,
                                'display_name' => $temp_full_name
                            ]);
                        }
                        // Commit transaction!
                        DB::commit();
                    }catch(Exception $e){
                        // Rollback transaction!
                        DB::rollback(); 
                        //dd($e);
                    }
                }
                
                foreach($temp_user_array_ad as $key_temp_user_ad => $value_temp_user_ad){
                    try{
                        //
                        // Start transaction!
                        DB::beginTransaction();
                        $temp_dn = $value_temp_user_ad[0];
                        $temp_given_name = $value_temp_user_ad[1];
                        $temp_mail = $value_temp_user_ad[2];
                        $temp_employee_type = $value_temp_user_ad[3];
                        $temp_employee_number = $value_temp_user_ad[4];
                        if( (isset($temp_employee_number)) && (!empty($temp_employee_number)) ){
                            $userObject = User::where("id", "=", $temp_employee_number)->first();
                            if( ($userObject) ){
                                $userObject->update([
                                    'email' => $temp_mail
                                ]);
                            }
                        }
                        // Commit transaction!
                        DB::commit();
                    }catch(Exception $e){
                        // Rollback transaction!
                        DB::rollback(); 
                        //dd($e);
                    }
                }
                
            }catch(Exception $e){
                //dd($e);
            }

        }
    }
}
