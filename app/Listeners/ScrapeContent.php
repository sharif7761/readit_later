<?php

namespace App\Listeners;

use App\Event\ContentCreated;
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
        $client = new Client();
        $crawler = $client->request('GET', $event->url);
        $crawler->filter('a')->each(function ($node) {
            echo $node->text()."\n";
        });
        //echo $event->url;
    }
}
