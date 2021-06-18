<?php

namespace App\Listeners;

use IlluminateAuthEventsLogin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;


class LoginLogs
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
     * @param IlluminateAuthEventsLogin  $event
     * @return void
     */
    public function handle(Login $event)
    {
        // dd($event);
        $event->subject = 'Login';
        $event->description = 'login :attributes ';

        // Session::flash('login-success', 'Hello ' . $event->user->name . ', welcome back!');
        activity($event->subject)
            ->by($event->user)
            ->log($event->description);
    }
}
