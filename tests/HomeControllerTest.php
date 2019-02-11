<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Panther\PantherTestCase;


class HomeControllerTest extends PantherTestCase
{
    public function testHomeController()
    {
        $pantherClient = static::createPantherClient();
        $pantherCrawler = $pantherClient->request('GET', '/');


        sleep(5);

        self::assertContains('Bla Bla Bla', $pantherCrawler->filter('h1')->text());

        $client = static::createClient();
        $crawler = $client->request('GET','/');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertContains('bla bla bla', $crawler->filter('h1')->text());

    }
}
