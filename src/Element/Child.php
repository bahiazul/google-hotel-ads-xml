<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Child
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Child implements \Sabre\Xml\Element
{
    /**
     * @var int
     */
    public $age;

    public function __construct(int $age = null)
    {
        $this->age = $age;
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

        $writer->writeAttributes(get_object_vars($this));
    }

    /**
     * @inheritDoc
     *
     * @param Sabre\Xml\Reader $reader
     * @return void
     */
    public static function xmlDeserialize(Sabre\Xml\Reader $reader)
    {
        $object = new self();

        foreach ($reader->parseAttributes() as $key => $value) {
            if (property_exists($object, $key)) {
                $object->{$key} = $value;
            }
        }

        $reader->next();

        return $object;
    }
}
