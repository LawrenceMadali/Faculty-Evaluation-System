<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use IlluminateAuthEventsLogin;
use Illuminate\Auth\Events\Login;

use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


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
        $description = Str::words($event->user->name, 1, ' is successfully login');

        $event->subject = 'Login';
        $event->description = Str::replaceFirst(',', '', $description);

        activity($event->subject)
            ->causedBy($event->user)
            ->event('login')
            ->withProperties(['attributes' => [
                'name' => $event->user->name
                ]])
            ->log($event->description);
    }
}
