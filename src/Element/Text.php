<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Text
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Text implements \Sabre\Xml\XmlSerializable
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $language;

    public function __construct(string $text = null, string $language = null)
    {
        $this->language = $language;
        $this->text = $text;
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
