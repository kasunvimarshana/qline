<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Events\UserAPIRequestEvent;
use App\Events\QualityRecordInputScanDataCreateEvent;
use App\Events\QualityRecordSewingAuditCreateEvent;
use App\Events\QualityRecordFinishingCreateEvent;

use App\Listeners\UserAPIRequestEventListener;
use App\Listeners\QualityRecordInputScanDataCreateEventListener;
use App\Listeners\QualityRecordSewingAuditCreateEventListener;
use App\Listeners\QualityRecordFinishingCreateEventListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        UserAPIRequestEvent::class => [
            UserAPIRequestEventListener::class
        ],
        QualityRecordInputScanDataCreateEvent::class => [
            QualityRecordInputScanDataCreateEventListener::class
        ],
        QualityRecordSewingAuditCreateEvent::class => [
            QualityRecordSewingAuditCreateEventListener::class
        ],
        QualityRecordFinishingCreateEvent::class => [
            QualityRecordFinishingCreateEventListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        //
    }
}
