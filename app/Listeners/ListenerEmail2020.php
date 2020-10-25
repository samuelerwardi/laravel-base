<?php

namespace App\Listeners;

use App\Events\EventEmail2020;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListenerEmail2020
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
    public function handle()
    {
        //
//        \Illuminate\Support\Facades\Mail::to("samuelerwardi@gmail.com")->send(new \App\Mail\SendMailExampleEvent());
    }
}
