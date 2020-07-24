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

    public function assertWrite($elementName, $xml)
    {
        $service = new Service();

        $fqen = '{' . Service::GHA_NS . '}' . $elementName;
        $obj = $service->parse($xml);

        $newXml = $service->write($fqen, $obj);
        $this->assertXmlStringEqualsXmlString($xml, $newXml);
    }
}
