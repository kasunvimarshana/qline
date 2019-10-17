<?php

namespace App\Listeners;

use App\Events\UserAPIRequestEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserAPIRequestEventListener
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
     * @param  UserAPIRequestEvent  $event
     * @return void
     */
    public function handle(UserAPIRequestEvent $event)
    {
        //
    }
}
