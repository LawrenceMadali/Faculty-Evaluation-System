<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Lockouts
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
     * @param  Lockout  $event
     * @return void
     */
    public function handle(Lockout $event)
    {
        // $log = new Access_Log();
        // $log->user_id = $event->user->id;
        // $log->ip_address = Request::getClientIp();
        // $log->event = 'Login Failed';
        // $log->is_success = 0;
        // $log->save();
    }
}
