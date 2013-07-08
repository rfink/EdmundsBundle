<?php

namespace RF\EdmundsBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BundleTest extends WebTestCase
{
    protected function setUp()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
    }

    public function testVehicleClient()
    {
        $client = self::$kernel->getContainer()->get('edmunds.vehicle_api');
        $command = $client->getCommand('tools.vinDecoder', array('vin' => ''));
    }

    public function testDealerClient()
    {
        $client = self::$kernel->getContainer()->get('edmunds.dealer_api');
        $command = $client->getCommand('dealer.get', array('id' => ''));
    }

    public function testInventoryClient()
    {
        $client = self::$kernel->getContainer()->get('edmunds.inventory_api');
        $command = $client->getCommand('inventory.getInventoryByVin', array('id' => ''));
    }

    public function testEditorialClient()
    {
        $client = self::$kernel->getContainer()->get('edmunds.editorial_api');
        $command = $client->getCommand('editorial.get');
    }
}
