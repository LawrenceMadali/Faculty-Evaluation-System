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
        $description = Str::words($event->user->name, 1, ' is successfully logout');

        $event->subject = 'Logout';
        $event->description = Str::replaceFirst(',', '', $description);
        
        activity($event->subject)
            ->causedBy($event->user)
            ->event('logout')
            ->withProperties(['attributes' => [
                'name' => $event->user->name
                ]])
            ->log($event->description);
    }
}
