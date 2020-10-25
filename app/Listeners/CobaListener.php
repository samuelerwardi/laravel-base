<?php

namespace App\Listeners;

use App\Events\CobaEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CobaListener
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
    public function handle(CobaEvent $cobaEvent)
    {
        \Illuminate\Support\Facades\Mail::to("samuelerwardi@gmail.com")->send(new \App\Mail\SendMailExample());
    }
}
