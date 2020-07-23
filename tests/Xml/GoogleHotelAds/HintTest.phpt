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

        $item1 = new Element\Item();
        $item1->Property = ['12345'];
        $item1->Stay = new Element\Stay('2018-07-03', 3);

        $item2 = new Element\Item();
        $item2->Property = ['67890'];
        $item2->Stay = new Element\Stay('2018-07-05', 4);

        $hint = new Element\Hint();
        $hint->Item = [$item1, $item2];

        $this->assertRead($xml, $hint);
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

        $item = new Element\Item();
        $item->Property = ['12345', '67890'];
        $item->FirstDate = '2018-07-03';
        $item->LastDate = '2018-07-06';

        $hint = new Element\Hint();
        $hint->Item = [$item];

        $this->assertRead($xml, $hint);
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

        $item1 = new Element\Item();
        $item1->Property = ['12345'];
        $item1->StaysIncludingRange = new Element\StaysIncludingRange('2018-07-03', '2018-07-06');

        $item2 = new Element\Item();
        $item2->Property = ['67890'];
        $item2->StaysIncludingRange = new Element\StaysIncludingRange('2018-07-05');

        $hint = new Element\Hint();
        $hint->Item = [$item1, $item2];

        $this->assertRead($xml, $hint);
    }
}
