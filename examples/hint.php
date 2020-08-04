<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Bahiazul\Xml\GoogleHotelAds\Service;

$input = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Hint>
    <Item>
        <Property>12345</Property>
        <StaysIncludingRange>
            <FirstDate>2018-07-03</FirstDate>
            <LastDate>2018-07-06</LastDate>
        </StaysIncludingRange>
    </Item>
    <Item>
        <Property>67890</Property>
        <StaysIncludingRange>
            <FirstDate>2018-07-05</FirstDate>
        </StaysIncludingRange>
    </Item>
</Hint>
XML;

$service = new Service();
$service->namespaceMap[Service::GHA_NS] = '';
$obj = $service->parse($input, null, $elementName);

$xml = $service->write($elementName, $obj);

print_r($obj);
echo $xml;
