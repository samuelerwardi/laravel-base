<?php

namespace App\Listeners;

use App\Events\CobaEvent;
use App\Events\CobaEventEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CobaListenerEmail
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
     * @param  object  $event
     * @return void
     */
    public function handle(CobaEventEmail $cobaEventEmail)
    {
//        dd($cobaEventEmail);
        \Illuminate\Support\Facades\Mail::to("samuelerwardi@gmail.com")->send(new \App\Mail\SendMailExampleEvent());
    }
}
