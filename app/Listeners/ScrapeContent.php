<?php

namespace App\Listeners;

use App\Event\ContentCreated;
use App\Jobs\ContentStoreProcess;
use App\Models\PocketData;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
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
        $contentStoreJob = (new ContentStoreProcess($event->url));
        dispatch($contentStoreJob);
    }
}
