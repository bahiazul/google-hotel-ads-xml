<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * OccupancyDetails
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class OccupancyDetails implements \Sabre\Xml\Element
{
    /**
     * The number of adult guests. Min:1, Max:20.
     *
     * @var int
     */
    public $NumAdults;

    /**
     * Whether any guests are children.
     *
     * @var Child[]
     */
    public $Children;

    public function __construct(int $NumAdults = null, array $Children = null)
    {
        $this->NumAdults = $NumAdults;
        $this->Children = $Children;
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

    /**
     * @inheritDoc
     *
     * @param Sabre\Xml\Reader $reader
     * @return void
     */
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
