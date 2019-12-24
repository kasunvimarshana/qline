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
        ini_set('memory_limit', '500M');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $index_1_column_dn = 0;
        $index_1_column_given_name = 1;
        $index_1_column_mail = 3;
        $index_1_column_employee_number = 4;
        $index_1_column_employee_type = 2;

        $index_2_column_employee_number = 0;
        $index_2_column_e_p_f_number = 1;
        $index_2_column_e_m_p_barcode = 2;
        $index_2_column_e_m_p_full_name = 3;
        $index_2_column_e_m_p_calling_name = 4;
        $index_2_designation = 5;
        $index_2_cluster = 6;
        $index_2_location = 7;
        $index_2_department = 8;
        $index_2_roster = 9;
        $index_2_skill_grade = 10;
        $index_2_direct_indirect_status = 11;
        $index_2_supervisor_name = 12;
        
        $resultDataArray = array();
        $userDataResourceArray = array(
            array(
                'sbu' => 'BLI',
                'host' => '10.227.241.29',
                'file_uri_user_hcm' => '/FCA_UserReconsiliation/BLI.xls',
                'file_uri_user_ad' => '/FCA_UserReconsiliation/BLI_Users.csv'
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
                        $temp_employee_number = $value_temp_user_hcm[ $index_2_column_employee_number ];
                        $temp_epf_number = $value_temp_user_hcm[ $index_2_column_e_p_f_number ];
                        $temp_full_name = $value_temp_user_hcm[ $index_2_column_e_m_p_full_name ];
                        $temp_designation = $value_temp_user_hcm[ $index_2_designation ];
                        $temp_department = $value_temp_user_hcm[ $index_2_department ];
                        $temp_roster = $value_temp_user_hcm[ $index_2_roster ];
                        
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
                        $temp_dn = $value_temp_user_ad[ $index_1_column_dn ];
                        $temp_given_name = $value_temp_user_ad[ $index_1_column_given_name ];
                        $temp_mail = $value_temp_user_ad[ $index_1_column_mail ];
                        $temp_employee_type = $value_temp_user_ad[ $index_1_column_employee_type ];
                        $temp_employee_number = $value_temp_user_ad[ $index_1_column_employee_number ];
                        
                        if( (isset($temp_employee_number)) && (!empty($temp_employee_number)) ){
                            $userObject = User::where("id", "=", $temp_employee_number)->first();
                            if( ($userObject) ){
                                $userObject->update([
                                    'email' => $temp_mail
                                ]);
                                
                                $userObject->givePermissionsTo( "create-event" );
                                $userObject->givePermissionsTo( "edit-event" );
                                $userObject->givePermissionsTo( "show-event" );
                                $userObject->givePermissionsTo( "create-quality_record_cutting" );
                                $userObject->givePermissionsTo( "create-quality_record_r_q_c" );
                                $userObject->givePermissionsTo( "create-quality_record_sewing_check" );
                                $userObject->givePermissionsTo( "create-quality_record_sewing_audit" );
                                $userObject->givePermissionsTo( "create-quality_record_finishing" );
                                $userObject->givePermissionsTo( "create-quality_record_c_n_i" );
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
