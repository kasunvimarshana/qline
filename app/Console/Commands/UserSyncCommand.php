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
     * The delay time.
     */
    protected $time_delay = 1;
	//sleep($this->time_delay);

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
        try{
            $this->checkUser_BLI();
        }catch(Exception $e){
            //dd($e);
        }
    }
    
    private function checkUser_BLI(){
        //
        $index_1_column_dn = 0;
        $index_1_column_given_name = 1;
        $index_1_column_mail = 4;
        $index_1_column_employee_number = 2;
        $index_1_column_employee_type = 3;

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
        
        //$keyTempUserData
        //$valueTempUserData
        
        foreach( $userDataResourceArray as $keyTempUserData => $valueTempUserData ){

            try{
                $sbu = $valueTempUserData['sbu'];
                $host = gethostbyaddr( $valueTempUserData['host'] );
                $file_uri_user_hcm = "//" . $host . $valueTempUserData['file_uri_user_hcm'];
                $file_uri_user_ad = "//" . $host . $valueTempUserData['file_uri_user_ad'];
                //$date_today = Carbon::now()->startOfDay();
                if( (!File::exists( $file_uri_user_hcm )) ){
                    throw new Exception("exception");
                }
                if( (!File::exists( $file_uri_user_ad )) ){
                    throw new Exception("exception");
                }
                if( (true) ){
                    $temp_user_array_hcm = Excel::toArray([], $file_uri_user_hcm);
                    $temp_user_array_ad = Excel::toArray([], $file_uri_user_ad);
                    $temp_user_array_hcm = array_pop(($temp_user_array_hcm));
                    $temp_user_array_ad = array_pop(($temp_user_array_ad));
                    /* *** */
                    foreach($temp_user_array_hcm as $key_temp_user_hcm => &$value_temp_user_hcm){
                        try{
                            //
                            // Start transaction!
                            //DB::beginTransaction();
                            /* *** */
                            if($key_temp_user_hcm == 0){
                                //unset($temp_user_array_hcm[$key_temp_user_hcm]);
                                continue;
                            }
                            
                            DB::transaction(function () use($value_temp_user_hcm, $index_2_column_employee_number, $index_2_column_e_p_f_number, $index_2_column_e_m_p_barcode, $index_2_column_e_m_p_full_name, $index_2_column_e_m_p_calling_name, $index_2_designation, $index_2_cluster, $index_2_location, $index_2_department, $index_2_roster, $index_2_skill_grade, $index_2_direct_indirect_status, $index_2_supervisor_name){
                                
                                $temp_employee_number = $value_temp_user_hcm[ $index_2_column_employee_number ];
                                $temp_e_p_f_number = $value_temp_user_hcm[ $index_2_column_e_p_f_number ];
                                $temp_e_m_p_barcode = $value_temp_user_hcm[ $index_2_column_e_m_p_barcode ];
                                $temp_e_m_p_full_name = $value_temp_user_hcm[ $index_2_column_e_m_p_full_name ];
                                $temp_e_m_p_calling_name = $value_temp_user_hcm[ $index_2_column_e_m_p_calling_name ];
                                $temp_designation = $value_temp_user_hcm[ $index_2_designation ];
                                $temp_cluster = $value_temp_user_hcm[ $index_2_cluster ];
                                $temp_location = $value_temp_user_hcm[ $index_2_location ];
                                $temp_department = $value_temp_user_hcm[ $index_2_department ];
                                $temp_roster = $value_temp_user_hcm[ $index_2_roster ];
                                $temp_skill_grade = $value_temp_user_hcm[ $index_2_skill_grade ];
                                $temp_direct_indirect_status = $value_temp_user_hcm[ $index_2_direct_indirect_status ];
                                $temp_supervisor_name = $value_temp_user_hcm[ $index_2_supervisor_name ];
                                
                                $temp_employee_number = trim($temp_employee_number);
                                $temp_e_p_f_number = trim($temp_e_p_f_number);
                                $temp_e_m_p_barcode = trim($temp_e_m_p_barcode);
                                $temp_e_m_p_full_name = trim($temp_e_m_p_full_name);
                                $temp_e_m_p_calling_name = trim($temp_e_m_p_calling_name);
                                $temp_designation = trim($temp_designation);
                                $temp_cluster = trim($temp_cluster);
                                $temp_location = trim($temp_location);
                                $temp_department = trim($temp_department);
                                $temp_roster = trim($temp_roster);
                                $temp_skill_grade = trim($temp_skill_grade);
                                $temp_direct_indirect_status = trim($temp_direct_indirect_status);
                                $temp_supervisor_name = trim($temp_supervisor_name);

                                $temp_employee_number = intval( $temp_employee_number );
                                $temp_e_p_f_number = intval( $temp_e_p_f_number );

                                if( (isset($temp_e_p_f_number)) && (!empty($temp_e_p_f_number)) ){
                                    $newUser = User::updateOrCreate([
                                        'id' => $temp_e_p_f_number
                                    ], [
                                        //'id' => $temp_e_p_f_number,
                                        'code' => $temp_e_p_f_number,
                                        'is_visible' => true,
                                        'is_active' => true,
                                        'code' => $temp_e_p_f_number,
                                        'code_epf' => $temp_e_p_f_number,
                                        'name_first' => $temp_e_m_p_full_name,
                                        //'name_last' => $temp_e_m_p_full_name,
                                        'display_name' => $temp_e_m_p_full_name,
                                        'grade' => $temp_skill_grade
                                    ]);
                                }
                            });
                            
                            /* *** */
                            // Commit transaction!
                            //DB::commit();
                        }catch(Exception $e){
                            // Rollback transaction!
                            //DB::rollback(); 
                            //dd($e);
                        }
                        //sleep($this->time_delay);
                    }
                    /* *** */
                    /* *** */
                    foreach($temp_user_array_ad as $key_temp_user_ad => &$value_temp_user_ad){
                        try{
                            //
                            // Start transaction!
                            //DB::beginTransaction();
                            /* *** */
                            if($key_temp_user_ad == 0){
                                //unset($temp_user_array_ad[$key_temp_user_ad]);
                                continue;
                            }
                            
                            DB::transaction(function () use($value_temp_user_ad, $index_1_column_dn, $index_1_column_given_name, $index_1_column_mail, $index_1_column_employee_number, $index_1_column_employee_type){
                                $temp_dn = $value_temp_user_ad[ $index_1_column_dn ];
                                $temp_given_name = $value_temp_user_ad[ $index_1_column_given_name ];
                                $temp_mail = $value_temp_user_ad[ $index_1_column_mail ];
                                $temp_employee_type = $value_temp_user_ad[ $index_1_column_employee_type ];
                                $temp_employee_number = $value_temp_user_ad[ $index_1_column_employee_number ];

                                $temp_dn = trim($temp_dn);
                                $temp_given_name = trim($temp_given_name);
                                $temp_mail = trim($temp_mail);
                                $temp_employee_type = trim($temp_employee_type);
                                $temp_employee_number = trim($temp_employee_number);

                                $temp_employee_number = intval( $temp_employee_number );

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
                            });
                            
                            /* *** */
                            // Commit transaction!
                            //DB::commit();
                        }catch(Exception $e){
                            // Rollback transaction!
                            //DB::rollback(); 
                            //dd($e);
                        }
                        //sleep($this->time_delay);
                    }
                    /* *** */
                    
                    unset($temp_user_array_hcm);
                    unset($temp_user_array_ad);
                }
                
                unset($resultDataArray);
                unset($valueTempUserData);
                unset($userDataResourceArray);
            }catch(Exception $e){
                //dd($e);
            }
            //sleep($this->time_delay);

        }
        
    }
}
