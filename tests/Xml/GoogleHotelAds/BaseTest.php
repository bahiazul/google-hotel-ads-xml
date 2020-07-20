<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

abstract class BaseTest extends \PHPUnit\Framework\TestCase
{
    public function assertRead($xml, $compareObject)
    {
        $service = new Service();

        $object = $service->parse($xml);

        $this->assertEquals($compareObject, $object);
    }

    public function assertWrite($xml)
    {
        $service = new Service();

        $object = $service->parse($xml);

        $newXml = $service->writeValueObject($object);
        $this->assertXmlStringEqualsXmlString($xml, $newXml);
    }

    /**
     * Assets whether we can parse an xml feed and serialize it again and end
     * up with a similar structure.
     *
     * If compareObject is specified, we'll also do a deep comparison of the
     * parsed atom php object.
     */
    public function assertRoundTrip($xml, $compareObject = null)
    {
        $this->assertRead($xml, $compareObject);
        $this->assertWrite($xml);
    }
}
