<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

use Bahiazul\Xml\GoogleHotelAds;

class Service extends \Sabre\Xml\Service
{
    const GHA_NS = '';
    const GHA_DEFAULT_PREFIX = '';

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->namespaceMap[self::GHA_NS] = self::GHA_DEFAULT_PREFIX;

        $ns = '{' . self::GHA_NS . '}';

        // The following elements are all simple xml elements, and we can use
        // the VO system for mapping from PHP object to XML element.
        $this->mapValueObject($ns . 'Context', Element\Context::class);
        $this->mapValueObject($ns . 'Hint', Element\Hint::class);
        $this->mapValueObject($ns . 'Item', Element\Item::class);
        $this->mapValueObject($ns . 'MembershipBenefitsIncluded', Element\MembershipBenefitsIncluded::class);
        $this->mapValueObject($ns . 'MilesIncluded', Element\MilesIncluded::class);
        $this->mapValueObject($ns . 'OccupancyDetails', Element\OccupancyDetails::class);
        $this->mapValueObject($ns . 'OnPropertyCredit', Element\OnPropertyCredit::class);
        $this->mapValueObject($ns . 'PackageData', Element\PackageData::class);
        $this->mapValueObject($ns . 'PhotoURL', Element\PhotoURL::class);
        $this->mapValueObject($ns . 'PropertyDataSet', Element\PropertyDataSet::class);
        $this->mapValueObject($ns . 'Result', Element\Result::class);
        $this->mapValueObject($ns . 'Query', Element\Query::class);
        $this->mapValueObject($ns . 'HintRequest', Element\HintRequest::class);
        $this->mapValueObject($ns . 'RoomBundle', Element\RoomBundle::class);
        $this->mapValueObject($ns . 'RoomData', Element\RoomData::class);
        $this->mapValueObject($ns . 'Stay', Element\Stay::class);
        $this->mapValueObject($ns . 'StaysIncludingRange', Element\StaysIncludingRange::class);
        $this->mapValueObject($ns . 'ProgramName', Element\LocalisedText::class);
        $this->mapValueObject($ns . 'ProgramLevel', Element\LocalisedText::class);
        $this->mapValueObject($ns . 'Provider', Element\LocalisedText::class);
        $this->mapValueObject($ns . 'Name', Element\LocalisedText::class);
        $this->mapValueObject($ns . 'Description', Element\LocalisedText::class);
        $this->mapValueObject($ns . 'Caption', Element\LocalisedText::class);
        $this->mapValueObject($ns . 'Child', Element\Child::class);

        $this->elementMap[$ns . 'Children'] = function ($reader) {
            return \Sabre\Xml\Deserializer\repeatingElements($reader, $ns . 'Child');
        };

        $propertyListDeserializer = function ($reader) {
            return \Sabre\Xml\Deserializer\repeatingElements($reader, $ns . 'Property');
        };
        $this->elementMap[$ns . 'HotelInfoProperties'] = $propertyListDeserializer;
        $this->elementMap[$ns . 'PropertyList'] = $propertyListDeserializer;
    }
}
