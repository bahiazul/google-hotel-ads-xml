<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

abstract class BaseTest extends \PHPUnit\Framework\TestCase
{
    public function assertRead($xml, $compareObj)
    {
        $service = new Service();

        $obj = $service->parse($xml);

        $this->assertEquals($obj, $compareObj);
    }

    public function assertWrite($xml)
    {
        $service = new Service();

        $obj = $service->parse($xml);

        $newXml = $service->writeValueObject($obj);
        $this->assertXmlStringEqualsXmlString($xml, $newXml);
    }

    /**
     * Assets whether we can parse an xml feed and serialize it again and end
     * up with a similar structure.
     *
     * If compareObj is specified, we'll also do a deep comparison of the
     * parsed atom php obj.
     */
    public function assertRoundTrip($xml, $compareObj = null)
    {
        $this->assertRead($xml, $compareObj);
        $this->assertWrite($xml);
    }
}
