<?php

namespace App\Listeners;

use App\Events\MaintenanceCostNotification;
use App\Jobs\MaintenanceCostNotificationJob;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\MaintenanceCostNotificationMail;

class SendMaintenanceCostNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MaintenanceCostNotification $event): void
    {
        $job = new MaintenanceCostNotificationJob($event->cost);
        dispatch($job);
    }
}
