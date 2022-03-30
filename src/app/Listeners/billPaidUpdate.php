<?php

namespace App\Listeners;

use App\Events\billPaid;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class billPaidUpdate
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
     * @param  \App\Events\billPaid  $event
     * @return void
     */
    public function handle(billPaid $event)
    {
        //
    }
}
