<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$input = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-07-18T16:20:00-04:00" id="42">
    <!-- A transaction message with room types result. -->
    <PropertyDataSet>
        <Property>12345</Property>
        <RoomData>
            <RoomID>single</RoomID>
            <Name>
                <Text text="Single room" language="en"/>
                <Text text="Chambre simple" language="fr"/>
            </Name>
            <Description>
                <Text text="A single room" language="en"/>
                <Text text="Le chambre simple" language="fr"/>
            </Description>
            <Capacity>2</Capacity>
            <PhotoURL>
                <Caption>
                    <Text text="Living area" language="en"/>
                    <Text text="Le chambre" language="fr"/>
                </Caption>
                <URL>http://www.foo.com/static/bar/image1234.jpg</URL>
            </PhotoURL>
            <PhotoURL>
                <URL>http://www.foo.com/static/bar/image1235.jpg</URL>
            </PhotoURL>
        </RoomData>
        <RoomData>
            <RoomID>double</RoomID>
            <Name>
                <Text text="Double room" language="en"/>
                <Text text="Chambre double" language="fr"/>
            </Name>
            <Occupancy>1</Occupancy>
        </RoomData>
        <PackageData>
            <PackageID>refundbreakfast</PackageID>
            <Name>
                <Text text="Refundable Room with Breakfast" language="en"/>
                <Text text="Chambre remboursable avec le petit déjeuner" language="fr"/>
            </Name>
            <Description>
                <Text text="Continental Breakfast" language="en"/>
                <Text text="Petit déjeuner continental" language="fr"/>
            </Description>
            <Refundable available="1" refundable_until_days="3"/>
            <ChargeCurrency>hotel</ChargeCurrency>
            <BreakfastIncluded>1</BreakfastIncluded>
        </PackageData>
        <PackageData>
            <PackageID>prepaid</PackageID>
            <Name>
                <Text text="Nonrefundable" language="en"/>
                <Text text="Non remboursable" language="fr"/>
            </Name>
            <Description>
                <Text text="Blah blah blad" language="en"/>
                <Text text="Le blah blah blad" language="fr"/>
            </Description>
            <Refundable available="0"/>
            <ChargeCurrency>web</ChargeCurrency>
            <Occupancy>2</Occupancy>
        </PackageData>
    </PropertyDataSet>
</Transaction>
XML;

$service = new Bahiazul\Xml\GoogleHotelAds\Service();
$fqen = '{' . Bahiazul\Xml\GoogleHotelAds\Service::GHA_NS . '}' . 'Transaction';
$obj = $service->parse($input);

$xml = $service->write($fqen, $obj);
echo $xml;
// print_r($obj);
