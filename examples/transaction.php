<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Bahiazul\Xml\GoogleHotelAds\Service;

$input = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-07-18T16:20:00-04:00" id="42">
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
    <Result>
        <Property>1234</Property>
        <Checkin>2018-06-10</Checkin>
        <Nights>1</Nights>

        <Baserate currency="USD">200.00</Baserate>
        <Tax currency="USD">20.00</Tax>
        <OtherFees currency="USD">1.00</OtherFees>

        <Rates>
            <!-- The rate_rule_id is required when using conditional rates -->
            <Rate rate_rule_id="mobile">
                <!-- Override base rate and taxes for conditional rates -->
                <Baserate currency="USD">180.00</Baserate>
                <Tax currency="USD">18.00</Tax>
                <!-- NOTE: OtherFees is inherited from the above setting -->
                <Custom1>ratecode123</Custom1>
            </Rate>
        </Rates>

    </Result>
    <Result>
        <Property>060773</Property>
        <RoomID>RoomType101</RoomID>
        <Checkin>2018-06-10</Checkin>
        <Nights>2</Nights>
        <Baserate currency="USD">278.33</Baserate>
        <Tax currency="USD">25.12</Tax>
        <OtherFees currency="USD">2.00</OtherFees>
        <AllowablePointsOfSale>
            <PointOfSale id="site1"/>
        </AllowablePointsOfSale>
    </Result>
    <Result>
        <Property>052213</Property>
        <RoomID>RoomType101</RoomID>
        <Checkin>2018-06-10</Checkin>
        <Nights>2</Nights>
        <Baserate currency="USD">299.98</Baserate>
        <Tax currency="USD">26.42</Tax>
        <OtherFees currency="USD">2.00</OtherFees>
        <AllowablePointsOfSale>
            <PointOfSale id="otto"/>
            <PointOfSale id="simon"/>
        </AllowablePointsOfSale>
    </Result>
</Transaction>
XML;

$service = new Service();
$service->namespaceMap[Service::GHA_NS] = '';
$obj = $service->parse($input, null, $elementName);

$xml = $service->write($elementName, $obj);

print_r($obj);
echo $xml;
