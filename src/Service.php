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

        $this->mapValueObject($gha . 'Children', Element\Children::class);
        $this->mapValueObject($gha . 'Context', Element\Context::class);
        $this->mapValueObject($gha . 'Hint', Element\Hint::class);
        $this->mapValueObject($gha . 'HotelInfoProperties', Element\PropertyList::class);
        $this->mapValueObject($gha . 'OccupancyDetails', Element\OccupancyDetails::class);
        $this->mapValueObject($gha . 'PackageData', Element\PackageData::class);
        $this->mapValueObject($gha . 'PropertyDataSet', Element\PropertyDataSet::class);
        $this->mapValueObject($gha . 'PropertyList', Element\PropertyList::class);
        $this->mapValueObject($gha . 'Rate', Element\Rate::class);
        $this->mapValueObject($gha . 'Result', Element\Result::class);
        $this->mapValueObject($gha . 'RoomBundle', Element\RoomBundle::class);
        $this->mapValueObject($gha . 'RoomData', Element\RoomData::class);
        $this->mapValueObject($gha . 'Stay', Element\Stay::class);
        $this->mapValueObject($gha . 'StaysIncludingRange', Element\StaysIncludingRange::class);

        $this->elementMap[$gha . 'Child'] = Element\Child::class;
        $this->elementMap[$gha . 'HintRequest'] = Element\HintRequest::class;
        $this->elementMap[$gha . 'Query'] = Element\Query::class;
        $this->elementMap[$gha . 'Refundable'] = Element\Refundable::class;
        $this->elementMap[$gha . 'Transaction'] = Element\Transaction::class;
    }
}
