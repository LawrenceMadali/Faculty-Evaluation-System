<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use IlluminateAuthEventsLogout;
use Illuminate\Auth\Events\Logout;

use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogoutLogs
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
     * @param  IlluminateAuthEventsLogout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        activity('Logout')
            ->causedBy($event->user)
            ->withProperties(['attributes' => [
                'name' => $event->user->name
                ]])
            ->log($event->user->name.' is successfully logout');
    }
}
