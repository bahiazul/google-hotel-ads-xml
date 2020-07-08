<?php

namespace Bahiazul\GoogleHotelAds\Xml\Element;

/**
 * The <Context> element describes information for a Live Query, including the
 * number and type of guests, the user country, and user device.
 *
 * Multiple <Context> will never be used with different user countries or user
 * devices. When multiple <Context> are used to query for multiple occupancies,
 * please provide each occupancy price as an additional Room Bundle for the
 * corresponding property/itinerary. Each property/itinerary should have a
 * single <Result> block with the prices for multiple occupancies included.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Context extends Base
{
    use OccupancyInfoTrait;

    /**
     * Filters rates by the country where user is located. The value is a
     * 2-letter country code such as “US” for United States, or a region code,
     * such as "EU" for “Europe.”
     *
     * Queries with <UserCountry> defined should result in a transaction message
     * with the appropriate <Rates> block defined for the queried country.
     *
     * @var string
     */
    public $userCountry;

    /**
     * Filters rates by the type of the device the user is searching from.
     * Possible values:
     *
     * * mobile
     * * desktop
     * * tablet
     *
     * Queries with <UserDevice> defined should result in a transaction message
     * with the appropriate <Rates> block defined for the queried device type.
     *
     * @var string
     */
    public $userDevice;
}
