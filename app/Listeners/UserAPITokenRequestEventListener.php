<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;
use App\UserAPIToken;
use Mail;
use Carbon\Carbon;
use App\Jobs\SendTokenCreateMessageJob;
use App\Events\UserAPITokenRequestEvent;
use \Exception;

class UserAPITokenRequestEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserAPITokenRequestEvent $event)
    {
        //
        $userAPITokenRequestEventClone = clone $event;
        try{
            $userAPIToken = $userAPITokenRequestEventClone->userAPIToken;
            $emailJob = (new SendTokenCreateMessageJob($userAPIToken));
            //->delay(Carbon::now()->addSeconds(10));
            dispatch($emailJob);
        }catch(Exception $e){
            
        }
    }
}
