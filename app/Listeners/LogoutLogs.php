<?php

namespace App\Listeners;

use IlluminateAuthEventsLogout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;

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
        $event->subject = 'Logout';
        $event->description = 'logout';

        // Session::flash('login-success', 'Hello ' . $event->user->name . ', welcome back!');
        activity($event->subject)
            ->by($event->user)
            ->log($event->description);
    }
}
