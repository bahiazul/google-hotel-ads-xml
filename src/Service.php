<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

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
        $gha = '{' . self::GHA_NS . '}';

        $this->mapValueObject($gha . 'AllowablePointsOfSale', Element\PointOfSaleList::class);
        $this->mapValueObject($gha . 'Caption', Element\LocalisedText::class);
        $this->mapValueObject($gha . 'Child', Element\Child::class);
        $this->mapValueObject($gha . 'Children', Element\Children::class);
        $this->mapValueObject($gha . 'Context', Element\Context::class);
        $this->mapValueObject($gha . 'Description', Element\LocalisedText::class);
        $this->mapValueObject($gha . 'Hint', Element\Hint::class);
        $this->mapValueObject($gha . 'Item', Element\Item::class);
        $this->mapValueObject($gha . 'MembershipBenefitsIncluded', Element\MembershipBenefitsIncluded::class);
        $this->mapValueObject($gha . 'MilesIncluded', Element\MilesIncluded::class);
        $this->mapValueObject($gha . 'Name', Element\LocalisedText::class);
        $this->mapValueObject($gha . 'OccupancyDetails', Element\OccupancyDetails::class);
        $this->mapValueObject($gha . 'OnPropertyCredit', Element\OnPropertyCredit::class);
        $this->mapValueObject($gha . 'PackageData', Element\PackageData::class);
        $this->mapValueObject($gha . 'PhotoURL', Element\PhotoURL::class);
        $this->mapValueObject($gha . 'PointOfSale', Element\PointOfSale::class);
        $this->mapValueObject($gha . 'ProgramLevel', Element\LocalisedText::class);
        $this->mapValueObject($gha . 'ProgramName', Element\LocalisedText::class);
        $this->mapValueObject($gha . 'PropertyDataSet', Element\PropertyDataSet::class);
        $this->mapValueObject($gha . 'PropertyList', Element\PropertyList::class);
        $this->mapValueObject($gha . 'Provider', Element\LocalisedText::class);
        $this->mapValueObject($gha . 'Query', Element\Query::class);
        $this->mapValueObject($gha . 'Rate', Element\Rate::class);
        $this->mapValueObject($gha . 'Result', Element\Result::class);
        $this->mapValueObject($gha . 'RoomBundle', Element\RoomBundle::class);
        $this->mapValueObject($gha . 'RoomData', Element\RoomData::class);
        $this->mapValueObject($gha . 'Stay', Element\Stay::class);
        $this->mapValueObject($gha . 'StaysIncludingRange', Element\StaysIncludingRange::class);
        $this->mapValueObject($gha . 'Text', Element\Text::class);
        $this->mapValueObject($gha . 'Transaction', Element\Transaction::class);

        $this->elementMap[$gha . 'Child'] = Element\Child::class;
        $this->elementMap[$gha . 'HintRequest'] = Element\HintRequest::class;
        $this->elementMap[$gha . 'PointOfSale'] = Element\PointOfSale::class;
        $this->elementMap[$gha . 'Query'] = Element\Query::class;
        $this->elementMap[$gha . 'Rate'] = Element\Rate::class;
        $this->elementMap[$gha . 'Refundable'] = Element\Refundable::class;
        $this->elementMap[$gha . 'Text'] = Element\Text::class;
        $this->elementMap[$gha . 'Transaction'] = Element\Transaction::class;
    }
}
