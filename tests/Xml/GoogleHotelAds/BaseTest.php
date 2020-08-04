<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

abstract class BaseTest extends \PHPUnit\Framework\TestCase
{
    public function assertRoundTrip($xml, $compareObject = null)
    {
        $service = new Service();
        $service->namespaceMap[Service::GHA_NS] = '';

        $object = $service->parse($xml, null, $elementName);

        if (!is_null($compareObject)) {
            $this->assertEquals($compareObject, $object);
        }

        $newXml = $service->write($elementName, $object);
        $this->assertXmlStringEqualsXmlString($xml, $newXml);
    }
}
