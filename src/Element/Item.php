<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Item
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Item extends Element
{
    /**
     * The ID of a hotel, using the same ID as the Hotel List Feed. The number
     * of <Property> elements you can specify in a single <Item> block is
     * determined by the type of Hint Response message:
     *
     * * Exact itineraries: Up to 100 hotels.
     * * Check-in ranges: More than one if you set <MultipleItineraries>
     *   to "checkin_range" in your <QueryControl> message.
     * * Ranged stay: More than one if you set <MultipleItineraries> to
     *   "affected_dates" in your <QueryControl> message.
     *
     * @var string[]
     */
    public $Property = [];

    /**
     * A container for the <CheckinDate> and <LengthOfStay> elements in an exact
     * itinerary Hint Response message. Each <Item> can contain only a single
     * <Stay>.
     *
     * @var Stay
     */
    public $Stay;

    /**
     * A container for the <FirstDate> and <LastDate> elements in a ranged stay
     * Hint Response message.
     *
     * @var StaysIncludingRange
     */
    public $StaysIncludingRange;

    use DateRangeTrait;

    public function __construct(
        array $Property = [],
        Stay $Stay = null,
        StaysIncludingRange $StaysIncludingRange = null,
        string $FirstDate = null,
        string $LastDate = null
    ) {
        $this->Property = $Property;
        $this->Stay = $Stay;
        $this->StaysIncludingRange = $StaysIncludingRange;
        $this->FirstDate = $FirstDate;
        $this->LastDate = $LastDate;
    }
}
