<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

class HintRequestTest extends BaseTest
{
    /**
     * @covers \Bahiazul\Xml\GoogleHotelAds\Element\HintRequest
     */
    public function testSimple()
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<HintRequest id="ABCDEF" timestamp="2018-06-07T16:20:00Z">
    <LastFetchTime>2018-03-25T00:04:09Z</LastFetchTime>
</HintRequest>
XML;

        $hintRequest = new Element\HintRequest();
        $hintRequest->id = 'ABCDEF';
        $hintRequest->timestamp = '2018-06-07T16:20:00Z';
        $hintRequest->LastFetchTime = '2018-03-25T00:04:09Z';

        $this->assertRead($xml, $hintRequest);
    }
}
