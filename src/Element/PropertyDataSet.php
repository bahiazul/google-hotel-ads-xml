<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * PropertyDataSet
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class PropertyDataSet implements \Sabre\Xml\XmlSerializable
{
    /**
     * The ID of a hotel that the associated data applies to. The value of this
     * element must be a string that matches the listing <id> in your
     * Hotel List Feed.
     *
     * @var string
     */
    public $Property;

    /**
     * Describes a room. This data is associated with a partner and hotel,
     * butnot with an itinerary.
     *
     * You reference the room ID in your pricing updates.
     *
     * @var RoomData[]
     */
    public $RoomData = [];

    /**
     * Describes a Room Bundle. This data is associated with a partner and
     * hotel, but not with an itinerary. This element is similar to <RoomData>,
     * but it describes amenities and terms that are not part of the physical
     * room description.
     *
     * You reference the package ID in your pricing updates.
     *
     * For more information, refer to {@link https://developers.google.com/hotels/hotel-ads/dev-guide/room-bundles#metadata Room Bundle metadata}.
     *
     * @var PackageData[]
     */
    public $PackageData = [];

    public function __construct(string $Property = null, array $RoomData = null, array $PackageData = null)
    {
        $this->Property = $Property;
        $this->RoomData = $RoomData;
        $this->PackageData = $PackageData;
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
