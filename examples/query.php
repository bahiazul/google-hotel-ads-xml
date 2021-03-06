<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Bahiazul\Xml\GoogleHotelAds\Service;

$input = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Query>
	<Checkin>2020-08-01</Checkin>
	<Nights>4</Nights>
	<PropertyList>
		<Property>my-hotel</Property>
		<Property>my-hotel-2</Property>
	</PropertyList>
	<DeadlineMs>500</DeadlineMs>
	<Context>
		<Occupancy>3</Occupancy>
		<UserCountry>CA</UserCountry>
		<UserDevice>tablet</UserDevice>
	</Context>
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
	<Context>
		<Occupancy>6</Occupancy>
		<OccupancyDetails>
			<NumAdults>4</NumAdults>
			<Children>
				<Child age="6"/>
				<Child age="10"/>
			</Children>
		</OccupancyDetails>
		<UserCountry>FR</UserCountry>
		<UserDevice>desktop</UserDevice>
	</Context>
</Query>
XML;

$service = new Service();
$service->namespaceMap[Service::GHA_NS] = '';
$obj = $service->parse($input, null, $elementName);

$xml = $service->write($elementName, $obj);

print_r($obj);
echo $xml;
