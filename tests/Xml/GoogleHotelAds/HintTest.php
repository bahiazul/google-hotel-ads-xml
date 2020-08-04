<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

class HintTest extends BaseTest
{
    /**
     * @covers \Bahiazul\Xml\GoogleHotelAds\Element\Hint
     */
    public function testExactItinerary()
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Hint>
    <Item>
        <Property>12345</Property>
        <Stay>
            <CheckInDate>2018-07-03</CheckInDate>
            <LengthOfStay>3</LengthOfStay>
        </Stay>
    </Item>
    <Item>
        <Property>67890</Property>
        <Stay>
            <CheckInDate>2018-07-05</CheckInDate>
            <LengthOfStay>4</LengthOfStay>
        </Stay>
    </Item>
</Hint>
XML;

        $this->assertRoundTrip($xml);
    }

    /**
     * @covers \Bahiazul\Xml\GoogleHotelAds\Element\Hint
     */
    public function testCheckinRanges()
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Hint>
    <Item>
        <Property>12345</Property>
        <Property>67890</Property>
        <FirstDate>2018-07-03</FirstDate>
        <LastDate>2018-07-06</LastDate>
    </Item>
</Hint>
XML;

        $this->assertRoundTrip($xml);
    }

    /**
     * @covers \Bahiazul\Xml\GoogleHotelAds\Element\Hint
     */
    public function testRangedStays()
    {
        $xml = <<<XML
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

        $this->assertRoundTrip($xml);
    }
}
