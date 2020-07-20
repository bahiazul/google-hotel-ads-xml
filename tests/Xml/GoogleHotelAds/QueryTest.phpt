<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

class QueryTest extends BaseTest
{
    /**
     * @covers \Bahiazul\Xml\GoogleHotelAds\Element\Query
     */
    public function testPricingQuery()
    {
        $xml = <<<XML
        XML;

        $query = new Element\Query();

        $this->assertRoundTrip($xml, $query);
    }

    /**
     * @covers \Bahiazul\Xml\GoogleHotelAds\Element\Query
     */
    public function testLiveQuery()
    {
        $xml = <<<XML
        XML;

        $query = new Element\Query();

        $this->assertRoundTrip($xml, $query);
    }

    /**
     * @covers \Bahiazul\Xml\GoogleHotelAds\Element\Query
     */
    public function testMetadataQuery()
    {
        $xml = <<<XML
        XML;

        $query = new Element\Query();

        $this->assertRoundTrip($xml, $query);
    }
}
