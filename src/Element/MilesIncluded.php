<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * MilesIncluded
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class MilesIncluded implements \Sabre\Xml\XmlSerializable
{
    /**
     * Number of miles per itinerary
     *
     * @var int
     */
    public $NumberofMiles;

    /**
     * Frequent flyer miles provide
     *
     * @var LocalisedText
     */
    public $Provider;

    public function __construct(int $NumberofMiles = null, LocalisedText $Provider = null)
    {
        $this->NumberofMiles = $NumberofMiles;
        $this->Provider = $Provider;
    }

    /**
     * @inheritDoc
     *
     * @param \Sabre\Xml\Writer $writer
     * @return void
     */
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $ns = '{}';

        foreach (get_object_vars($this) as $key => $value) {
            if (!is_null($value)) {
                $writer->write([
                    $ns . $key => $value,
                ]);
            }
        }
    }
}
