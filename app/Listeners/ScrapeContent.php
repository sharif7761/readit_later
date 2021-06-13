<?php

namespace App\Listeners;

use App\Event\ContentCreated;
use App\Models\PocketData;
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
        $result = array();
        $client = new Client();
        $crawler = $client->request('GET', $event->url);
        $result = $crawler->filter('h1, h2')->each(function ($node){
            return $node->text();
        });

        $data_item = json_encode($result);

        $pocketContent = new PocketData([
            'data' => $data_item,
        ]);
        $pocketContent->save();
    }
}
