<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

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
        activity('Login')
            ->causedBy($event->user->id)
            ->withProperties(['attributes' => [
                'name' => $event->user->name
                ]])
            ->log($event->user->name.' is successfully login');
    }
}
