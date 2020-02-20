<?php

namespace Tests\Unit;

use App\Facades\Contentful;
use Tests\TestCase;
use Contentful\Delivery\Client as DeliveryClient;

class ContentfulTest extends TestCase
{
    public function test_can_initalise_contentful_client()
    {
        $client = \App::make("contentful");

        $this->assertInstanceOf(DeliveryClient::class, $client);
    }

    public function test_can_fetch_entities()
    {
        $client = \App::make("contentful");
        $entries = $client->getEntries();

        $this->assertNotEmpty($entries);
    }

    public function test_contentful_facade()
    {
        $entries = Contentful::getEntries();
        $this->assertNotEmpty($entries);
    }
}
