<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * OnPropertyCredit
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class OnPropertyCredit implements \Sabre\Xml\XmlSerializable
{
    /**
     * The value of the credit per itinerary, in local currency.
     *
     * @var MonetaryValue
     */
    public $Amount;

    public function __construct(MonetaryValue $Amount = null)
    {
        $this->Amount = $Amount;
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
