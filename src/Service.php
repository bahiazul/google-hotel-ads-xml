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
        $this->elementMap[$gha . 'Item'] = Element\Item::class;
        $this->elementMap[$gha . 'Hint'] = function (\Sabre\Xml\Reader $reader) use ($gha) {
            return \Sabre\Xml\Deserializer\repeatingElements($reader, $gha . 'Item');
        };
        $this->elementMap[$gha . 'HintRequest'] = Element\HintRequest::class;
        $this->elementMap[$gha . 'Query'] = Element\Query::class;
        $this->elementMap[$gha . 'Stay'] = Element\Stay::class;
        $this->elementMap[$gha . 'StaysIncludingRange'] = Element\StaysIncludingRange::class;

        // Writing
        $this->mapValueObject($gha . 'Transaction', Element\Transaction::class);
    }
}
