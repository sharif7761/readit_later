<?php

namespace App\Listeners;

use App\Event\ContentCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ScrapeContent
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
     * @param  ContentCreated  $event
     * @return void
     */
    public function handle(ContentCreated $event)
    {
        echo $event->url;
    }
}
