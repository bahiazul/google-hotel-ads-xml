<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * LocalisedText
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class LocalisedText implements \Sabre\Xml\XmlSerializable
{
    /**
     * @var Text[]
     */
    public $Text = [];

    public function __construct(array $Text = [])
    {
        $this->Text = $Text;
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
