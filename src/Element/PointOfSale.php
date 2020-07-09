<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * PointOfSale
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class PointOfSale implements \Sabre\Xml\XmlSerializable
{
    /**
     * @var string
     */
    public $id;

    public function __construct(string $id = null)
    {
        $this->id = $id;
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
}
