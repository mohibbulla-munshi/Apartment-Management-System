<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\MaintenanceCostNotificationMail;
use App\Events\MaintenanceCostNotification;
use App\Models\User;
use Mail;

class MaintenanceCostNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $cost;
    public function __construct($cost)
    {
        $this->cost = $cost;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $users = User::all();
        foreach($users as $user) {
            Mail::to($user->email)->send(new MaintenanceCostNotificationMail($this->cost, $user->name));
        }

    }
}
