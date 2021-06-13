<?php

namespace App\Jobs;

use App\Models\PocketData;
use Goutte\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ContentStoreProcess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $result = array();
        $client = new Client();
        $crawler = $client->request('GET', $this->url);
        $result = $crawler->filter('h1, img')->each(function ($node){
            return $node->text();
        });

        $data_item = json_encode($result);

        $pocketContent = new PocketData([
            'data' => $data_item,
        ]);
        $pocketContent->save();
    }
}
