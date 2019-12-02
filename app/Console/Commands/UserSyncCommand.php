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
                
                ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                $temp_user_array_hcm = Excel::toArray([], $file_uri_user_hcm);
                $temp_user_array_ad = Excel::toArray([], $file_uri_user_ad);
                $temp_user_array_hcm = array_pop(($temp_user_array_hcm));
                $temp_user_array_ad = array_pop(($temp_user_array_ad));
                foreach($temp_user_array_hcm as $key_temp_user_hcm => $value_temp_user_hcm){
                    try{
                        //
                        // Start transaction!
                        DB::beginTransaction();
                        /* ====================================================================================== */
                        echo "\n ..... \n";
                        echo $value_temp_user_hcm[0] . "\n";//employee number
                        echo $value_temp_user_hcm[1] . "\n";//epf number
                        echo $value_temp_user_hcm[2] . "\n";//full name
                        echo $value_temp_user_hcm[3] . "\n";//designation
                        echo $value_temp_user_hcm[4] . "\n";//department
                        echo $value_temp_user_hcm[5] . "\n";//roster
                        //$newUser = User::updateOrCreate([], []);
                        /* ====================================================================================== */
                        // Commit transaction!
                        DB::commit();
                    }catch(Exception $e){
                        // Rollback transaction!
                        DB::rollback(); 
                        //dd($e);
                    }
                }
                
                foreach($temp_user_array_ad as $key_temp_user_ad => $value_temp_user_ad){
                    //dd($value_temp_user_ad);
                }
                ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            }catch(Exception $e){
                //dd($e);
            }

        }
    }
}
