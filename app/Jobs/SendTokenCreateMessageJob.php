<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Support\Facades\Session as Session;
use Mail;
use App\Mail\userAPITokenMail;
use App\User;
use App\UserAPITokenObject;
use \Exception;

class SendTokenCreateMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    /**
     * The queue connection that should handle the job.
     *
     * @var string
     */
    //public $connection = 'sqs';
    /**
     * The number of seconds the job can run before timing out.
     *
     * @var int
     */
    //public $timeout = 120;
    /**
    * The number of seconds to wait before retrying the job.
    *
    * @var int
    */
    //public $retryAfter = 3;
    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 60;
    /**
    * Delete the job if its models no longer exist.
    *
    * @var bool
    */
    public $deleteWhenMissingModels = true;
    
    /**
    * Determine the time at which the job should timeout.
    *
    * @return \DateTime
    */
    /*
    public function retryUntil()
    {
        return now()->addSeconds(5);
    }
    */

    protected $userAPIToken;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($userAPIToken)
    {
        //
        $this->userAPIToken = $userAPIToken;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $userAPIToken = $this->userAPIToken;
        
        $toUserArray = array();
        $ccUserArray = array();
        $bccUserArray = array();
        
        //send mail
        try{
            if( (isset($userAPIToken)) && ($userAPIToken->user) ){
                $user = $userAPIToken->user;
                array_push($toUserArray, $user->email);

                $toUserArray = array_unique($toUserArray);
                //$ccUserArray = array_unique($ccUserArray);
                //$bccUserArray = array_unique($bccUserArray);

                Mail::to($toUserArray)
                    //->subject("3W")
                    //->cc($ccUserArray)
                    //->bcc($ccUserArray)
                    ->send(new userAPITokenMail($userAPIToken));
            }
        }catch(Exception $e){}
    }
    
    /**
     * The job failed to process.
     *
     * @param  Exception  $exception
     * @return void
     */
    /*
    public function failed(Exception $exception)
    {
        // Send user notification of failure, etc...
    }
    */
    
}
