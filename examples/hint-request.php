<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Bahiazul\Xml\GoogleHotelAds\Service;

$input = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<HintRequest id="ABCDEF" timestamp="2018-06-07T16:20:00Z">
    <LastFetchTime>2018-03-25T00:04:09Z</LastFetchTime>
</HintRequest>
XML;

$service = new Service();
$service->namespaceMap[Service::GHA_NS] = '';
$obj = $service->parse($input, null, $elementName);

$xml = $service->write($elementName, $obj);

print_r($obj);
echo $xml;
