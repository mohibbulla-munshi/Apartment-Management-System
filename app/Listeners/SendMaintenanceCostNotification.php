<?php

namespace App\Listeners;

use App\Events\MaintenanceCostNotification;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\MaintenanceCostNotificationMail;

class SendMaintenanceCostNotification
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
        $users = User::all();
        foreach($users as $user) {
            Mail::to($user->email)->send(new MaintenanceCostNotificationMail($event->cost, $user->name));
        }
    }
}