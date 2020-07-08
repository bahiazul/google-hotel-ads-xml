<?php

namespace Bahiazul\GoogleHotelAds\Xml\Element;

/**
 * Item
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Item extends Base
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
    public $property = [];

    /**
     * A container for the <CheckinDate> and <LengthOfStay> elements in an exact
     * itinerary Hint Response message. Each <Item> can contain only a single
     * <Stay>.
     *
     * @var Stay
     */
    public $stay;

    /**
     * A container for the <FirstDate> and <LastDate> elements in a ranged stay
     * Hint Response message.
     *
     * @var StaysIncludingRange
     */
    public $staysIncludingRange;

    /**
     * The first date of the date range for a check-in range or ranged stay Hint
     * Response message. Dates are inclusive.
     *
     * @var string
     */
    public $firstDate;

    /**
     * The last date of the date range for a check-in range or ranged stay Hint
     * Response message. Dates are inclusive.
     *
     * \* This element is optional for ranged stays.
     *
     * @var string
     */
    public $lastDate;
}
