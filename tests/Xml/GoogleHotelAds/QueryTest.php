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
<?xml version="1.0" encoding="UTF-8"?>
<Query>
    <Checkin>2018-06-10</Checkin>
    <Nights>3</Nights>
    <PropertyList>
        <Property>pid5</Property>
        <Property>pid8</Property>
        <Property>pid13</Property>
        <Property>pid21</Property>
    </PropertyList>
</Query>
XML;

        $obj = new Element\Query(null, '2018-06-10', '3');
        $obj->PropertyList = new Element\PropertyList(['pid5', 'pid8', 'pid13', 'pid21']);

        $this->assertRead($xml, $obj);
    }

    /**
     * @covers \Bahiazul\Xml\GoogleHotelAds\Element\Query
     */
    public function testLiveQuery()
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Query latencySensitive="true">
    <Checkin>2017-06-07</Checkin>
    <Nights>5</Nights>
    <DeadlineMs>500</DeadlineMs>
    <PropertyList>
        <Property>8675309</Property>
    </PropertyList>
    <Context>
        <Occupancy>4</Occupancy>
        <OccupancyDetails>
            <NumAdults>2</NumAdults>
            <Children>
                <Child age="8"/>
                <Child age="5"/>
            </Children>
        </OccupancyDetails>
        <UserCountry>US</UserCountry>
        <UserDevice>mobile</UserDevice>
    </Context>
</Query>
XML;

        $obj = new Element\Query('true', '2017-06-07', '5');
        $obj->DeadlineMs = '500';
        $obj->PropertyList = new Element\PropertyList(['8675309']);
        $children = new Element\Children([new Element\Child('8'), new Element\Child('5')]);
        $occupancyDetails = new Element\OccupancyDetails('2', $children);
        $obj->Context = new Element\Context('4', $occupancyDetails, 'US', 'mobile');

        $this->assertRead($xml, $obj);
    }

    /**
     * @covers \Bahiazul\Xml\GoogleHotelAds\Element\Query
     */
    public function testMetadataQuery()
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Query>
    <HotelInfoProperties>
        <Property>pid5</Property>
        <Property>pid8</Property>
        <Property>pid13</Property>
        <Property>pid21</Property>
    </HotelInfoProperties>
</Query>
XML;

        $obj = new Element\Query();
        $obj->HotelInfoProperties = new Element\PropertyList(['pid5', 'pid8', 'pid13', 'pid21']);

        $this->assertRead($xml, $obj);
    }
}
