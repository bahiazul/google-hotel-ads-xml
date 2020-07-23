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

        // Reading
        $this->elementMap[$gha . 'Child'] = Element\Child::class;
        $this->elementMap[$gha . 'Children'] = function (\Sabre\Xml\Reader $reader) use ($gha) {
            return \Sabre\Xml\Deserializer\repeatingElements($reader, $gha . 'Child');
        };
        $this->elementMap[$gha . 'Context'] = Element\Context::class;
        $this->elementMap[$gha . 'HotelInfoProperties'] = function (\Sabre\Xml\Reader $reader) use ($gha) {
            return \Sabre\Xml\Deserializer\repeatingElements($reader, $gha . 'Property');
        };
        $this->elementMap[$gha . 'OccupancyDetails'] = Element\OccupancyDetails::class;
        $this->elementMap[$gha . 'PropertyList'] = function (\Sabre\Xml\Reader $reader) use ($gha) {
            return \Sabre\Xml\Deserializer\repeatingElements($reader, $gha . 'Property');
        };
        $this->elementMap[$gha . 'Query'] = Element\Query::class;
        $this->elementMap[$gha . 'Stay'] = Element\Stay::class;
        $this->elementMap[$gha . 'StaysIncludingRange'] = Element\StaysIncludingRange::class;

        // Writing
        $this->mapValueObject($gha . 'Transaction', Element\Transaction::class);
        $this->elementMap[$gha . 'Transaction'] = Element\Transaction::class;
    }
}
