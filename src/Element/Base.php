<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Base.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
abstract class Base implements \Sabre\Xml\Element
{
    private function getAttributes()
    {
        return array_filter(
            get_object_vars($this),
            function ($k) {
                return $k[0] >= 'a';
            },
            ARRAY_FILTER_USE_KEY
        );
    }

    private function getElements()
    {
        return array_filter(
            get_object_vars($this),
            function ($k) {
                return $k[0] < 'a';
            },
            ARRAY_FILTER_USE_KEY
        );
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $ns = '{}';

        $attributes = array_filter($this->getAttributes());
        $writer->writeAttributes($attributes);

        $elements = array_filter($this->getElements());
        foreach ($elements as $key => $value) {
            $writer->write([
                $ns.$key => $value,
            ]);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        $ns = '{}';
        /** @phpstan-ignore-next-line */
        $object = new self();

        foreach ($reader->parseAttributes() as $key => $value) {
            if (property_exists($object, $key)) {
                $object->{$key} = $value;
            }
        }

        $kvs = \Sabre\Xml\Element\KeyValue::xmlDeserialize($reader);
        foreach ($kvs as $key => $value) {
            $property = str_replace($ns, '', $key, 1);
            if (isset($value)) {
                $object->{$property} = $value;
            }
        }

        return $object;
    }
}
