<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * StaysIncludingRange
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class StaysIncludingRange implements \Sabre\Xml\XmlDeserializable
{
    use DateRangeTrait;

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
