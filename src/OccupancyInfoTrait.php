<?php

namespace Bahiazul\GoogleHotelAds\Xml;

trait OccupancyInfoTrait
{
    /**
     * Specifies the total number of guests.
     *
     * While not mandatory, queries with <Occupancy> should result in a
     * transaction message with the appropriate Room Bundles defined for each
     * <Occupancy> queried.
     *
     * Notes:
     *
     * * The value of <Occupancy> must be a positive integer between 1 and 20,
     *   inclusive.
     * * <Occupancy> may not always appear in a query. In such cases, you
     *   should return prices of all occupancies.
     * * <Occupancy> may be accompanied by <OccupancyDetails>, which specifies
     *   the type of guests (adults or children). Refer to <OccupancyDetails>
     *   for syntax and description of child elements.
     * * If you specify <Occupancy> in both <RoomBundle> and <PackageData>, the
     *   value in <RoomBundle> takes precedence.
     * * When <Occupancy> appears under <Result>, it must specify "2" or more.
     * * This value must be less than or equal to the <Capacity> element, which is
     *   the number of people that the room can physically accommodate.
     * * Partners must be whitelisted by Google to be able to send
     *   non-double occupancy prices. Contact your support team to enable this
     *   feature.
     *
     * @var int
     */
    public $occupancy;

    /**
     * Specifies the maximum number of guests for a room or package.
     * <OccupancyDetails> can contain additional information such as the number
     * and type of guests (adults or children).
     *
     * Is preceded by <Occupancy>. Specifies guests by type, including:
     *
     * * <NumAdults>: number of adult guests
     * * <Children> and <Child "age">: Specifies which guests are children
     *   (typically age 0-17), and optionally includes each child’s age.
     *
     * While not mandatory, queries with <OccupancyDetails> should result in a
     * transaction message with the appropriate Room Bundles defined for each
     * <Occupancy> queried.
     *
     * Note: <OccupancyDetails> may not always appear in a query. In such cases,
     * you should assume that all guests are adults.
     *
     * When <Occupancy> and <OccupancyDetails> appear within the <Rates> element
     * of <Result> or <RoomBundle>, it means that the rate is constrained by the
     * occupancy details.
     *
     * @var OccupancyDetails
     */
    public $occupancyDetails;
}
