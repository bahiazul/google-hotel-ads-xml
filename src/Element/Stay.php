<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Stay
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Stay implements \Sabre\Xml\XmlDeserializable
{
    /**
     * The check-in date for the itinerary.
     *
     * @var string
     */
    public $CheckInDate;

    /**
     * The number of nights for the itinerary, expressed as a positive integer.
     *
     * @var int
     */
    public $LengthOfStay;

    public static function xmlDeserialize(Sabre\Xml\Reader $reader)
    {
        $ns = '{}';
        $object = new self();

        $kvs = Sabre\Xml\Element\KeyValue::xmlDeserialize($reader);
        foreach ($kvs as $key => $value) {
            $property = str_replace($ns, '', $key, 1);
            if (isset($value)) {
                $object->{$property} = $value;
            }
        }

        return $object;
    }
}
