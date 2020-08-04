<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

class TransactionTest extends BaseTest
{
    /**
     * @covers          \Bahiazul\Xml\GoogleHotelAds\Element\Transaction
     * @dataProvider    metadataProvider
     */
    public function testMetadataTransaction($xml)
    {
        $this->assertRoundTrip($xml);
    }

    /**
     * @covers          \Bahiazul\Xml\GoogleHotelAds\Element\Transaction
     * @dataProvider    pricingProvider
     */
    public function testPricingTransaction($xml)
    {
        $this->assertRoundTrip($xml);
    }

    public function metadataProvider()
    {
        $dataProvider = [];
        $dataProvider[][] = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-07-18T16:20:00-04:00" id="42">
    <PropertyDataSet>
        <Property>1234</Property>
        <RoomData>
            <RoomID>5440OF</RoomID>
            <Name>
                <Text text="Single King Bed Room" language="en"/>
                <Text text="Simple Lit de Roi" language="fr"/>
            </Name>
            <Description>
                <Text text="One king bed with pillowtop mattresses, 300-thread-count linens, and down comforters (bedspreads). City view. 300 square feet. Desk with rolling chair. Multi-line phone with voice mail. Cable/satellite TV with complimentary HBO and pay movies." language="en"/>
                <Text text="Un très grand lit avec matelas à plateau-coussin, ..." language="fr"/>
            </Description>
            <Capacity>4</Capacity>
            <PhotoURL>
                <Caption>
                    <Text text="Bathroom View" language="en"/>
                    <Text text="La salle de baines" language="fr"/>
                </Caption>
                <URL>http://www.foo.com/static/bar/image1234.jpg</URL>
            </PhotoURL>
        </RoomData>
    </PropertyDataSet>
</Transaction>
XML;

        $dataProvider[][] = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-07-18T16:20:00-04:00" id="42">
    <PropertyDataSet>
        <Property>180054</Property>
        <RoomData>
            <RoomID>060773</RoomID>
            <Name>
                <Text text="Single Bed Room" language="en"/>
                <Text text="Chambre single" language="fr"/>
            </Name>
            <Description>
                <Text text="Non-smoking" language="en"/>
                <Text text="Pas de fumiers" language="fr"/>
            </Description>
            <PhotoURL>
                <Caption>
                    <Text text="Living area" language="en"/>
                    <Text text="Le chambre" language="fr"/>
                </Caption>
                <URL>http://www.foo.com/static/bar/image1234.jpg</URL>
            </PhotoURL>
        </RoomData>
        <PackageData>
            <PackageID>P54321</PackageID>
            <Name>
                <Text text="Breakfast Included" language="en"/>
                <Text text="Avec le petit déjeuner" language="fr"/>
            </Name>
            <Description>
                <Text text="Includes a delightful array of jams and jellies." language="en"/>
                <Text text="Comprend une délicieuse gamme de confitures et gelées." language="fr"/>
            </Description>
            <BreakfastIncluded>1</BreakfastIncluded>
        </PackageData>
    </PropertyDataSet>
</Transaction>
XML;

        $dataProvider[][] = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-07-18T16:20:00-04:00" id="42">
    <PropertyDataSet>
        <Property>1234</Property>
        <RoomData>
            <RoomID>5440OF</RoomID>
            <Name>
                <Text text="Single King Bed Room" language="en"/>
                <Text text="Simple Lit de Roi" language="fr"/>
            </Name>
            <Description>
                <Text text="One king bed with pillowtop mattresses, 300-thread-count linens, and down comforters (bedspreads). City view. 300 square feet. Desk with rolling chair. Multi-line phone with voice mail. Cable/satellite TV with complimentary HBO and pay movies." language="en"/>
                <Text text="Un très grand lit avec matelas à plateau-coussin, ..." language="fr"/>
            </Description>
            <Capacity>4</Capacity>
            <PhotoURL>
                <Caption>
                    <Text text="Bathroom View" language="en"/>
                    <Text text="La salle de baines" language="fr"/>
                </Caption>
                <URL>http://www.foo.com/static/bar/image1234.jpg</URL>
            </PhotoURL>
        </RoomData>
    </PropertyDataSet>
</Transaction>
XML;

        $dataProvider[][] = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-07-18T16:20:00-04:00" id="42">
    <PropertyDataSet>
        <Property>180054</Property>
        <RoomData>
            <RoomID>060773</RoomID>
            <Name>
                <Text text="Single Bed Room" language="en"/>
                <Text text="Chambre single" language="fr"/>
            </Name>
            <Description>
                <Text text="Non-smoking" language="en"/>
                <Text text="Pas de fumiers" language="fr"/>
            </Description>
            <PhotoURL>
                <Caption>
                    <Text text="Living area" language="en"/>
                    <Text text="Le chambre" language="fr"/>
                </Caption>
                <URL>http://www.foo.com/static/bar/image1234.jpg</URL>
            </PhotoURL>
        </RoomData>
        <PackageData>
            <PackageID>P54321</PackageID>
            <Name>
                <Text text="Breakfast Included" language="en"/>
                <Text text="Avec le petit déjeuner" language="fr"/>
            </Name>
            <Description>
                <Text text="Includes a delightful array of jams and jellies." language="en"/>
                <Text text="Comprend une délicieuse gamme de confitures et gelées." language="fr"/>
            </Description>
            <BreakfastIncluded>1</BreakfastIncluded>
        </PackageData>
    </PropertyDataSet>
</Transaction>
XML;

        $dataProvider[][] = <<<XML
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

        return $dataProvider;
    }

    public function pricingProvider()
    {
        $dataProvider = [];
        $dataProvider[][] = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-07-23T16:20:00-04:00" id="42">
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

        $dataProvider[][] = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-08-24T16:20:00-04:00" id="42">
    <Result>
        <Property>1234</Property>
        <Checkin>2018-06-07</Checkin>
        <Nights>1</Nights>
        <Baserate currency="USD">209.99</Baserate>
        <Tax currency="USD">25.12</Tax>
        <OtherFees currency="USD">2.00</OtherFees>
    </Result>
    <Result>
        <Property>1234</Property>
        <Checkin>2018-06-07</Checkin>
        <Nights>2</Nights>
        <Baserate currency="USD">419.98</Baserate>
        <Tax currency="USD">25.12</Tax>
        <OtherFees currency="USD">2.00</OtherFees>
    </Result>
    <Result>
        <Property>1234</Property>
        <Checkin>2018-06-07</Checkin>
        <Nights>3</Nights>
        <Baserate currency="USD">614.97</Baserate>
        <Tax currency="USD">21.12</Tax>
        <OtherFees currency="USD">2.00</OtherFees>
    </Result>
    <Result>
        <Property>1234</Property>
        <Checkin>2018-06-07</Checkin>
        <Nights>4</Nights>
        <Baserate currency="USD">819.96</Baserate>
        <Tax currency="USD">21.12</Tax>
        <OtherFees currency="USD">2.00</OtherFees>
    </Result>
    <Result>
        <Property>1234</Property>
        <Checkin>2018-06-07</Checkin>
        <Nights>5</Nights>
        <Baserate currency="USD">999.95</Baserate>
        <Tax currency="USD">21.12</Tax>
        <OtherFees currency="USD">2.00</OtherFees>
    </Result>
    <Result>
        <Property>1234</Property>
        <Checkin>2018-06-07</Checkin>
        <Nights>6</Nights>
        <Baserate currency="USD">1193.94</Baserate>
        <Tax currency="USD">21.12</Tax>
        <OtherFees currency="USD">2.00</OtherFees>
    </Result>
    <Result>
        <Property>1234</Property>
        <Checkin>2018-06-07</Checkin>
        <Nights>7</Nights>
        <Baserate currency="USD">1259.93</Baserate>
        <Tax currency="USD">21.12</Tax>
        <OtherFees currency="USD">2.00</OtherFees>
    </Result>
</Transaction>
XML;

        $dataProvider[][] = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-07-18T16:20:00-04:00" id="42">
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
</Transaction>
XML;

        $dataProvider[][] = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Transaction timestamp="2017-07-18T16:20:00-04:00" id="42">
    <Result>
        <Property>1123581321</Property>
        <Checkin>2018-06-07</Checkin>
        <Nights>1</Nights>
        <Baserate currency="USD">-1</Baserate>
        <Tax currency="USD">0</Tax>
        <OtherFees currency="USD">0</OtherFees>
    </Result>
    <Result>
        <Property>1123581321</Property>
        <Checkin>2018-06-08</Checkin>
        <Nights>1</Nights>
        <Baserate currency="USD">-1</Baserate>
        <Tax currency="USD">0</Tax>
        <OtherFees currency="USD">0</OtherFees>
    </Result>
    <Result>
        <Property>1123581321</Property>
        <Checkin>2018-06-09</Checkin>
        <Nights>1</Nights>
        <Baserate currency="USD">-1</Baserate>
        <Tax currency="USD">0</Tax>
        <OtherFees currency="USD">0</OtherFees>
    </Result>
</Transaction>
XML;

        return $dataProvider;
    }
}
