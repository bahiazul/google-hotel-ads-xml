<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class RoomBundle extends Base
{
    /**
     * Defines the price of the Room Bundle for the stay. This element uses the
     * same syntax as <Baserate> in <Result>, with the following exception:
     *
     *  * When the room is unavailable for the itinerary, remove the
     *    <RoomBundle> element to indicate that a room is no longer in
     *    inventory. For more information, refer to Removing a Room Bundle.
     *
     * @var float
     */
    public $baserate;

    /**
     * The taxes that are calculated for the final price of a room. The <Tax>
     * element takes a single required attribute, currency, that defines the
     * three-letter currency code for the taxes. For example, use "USD" for US
     * dollars.
     *
     * @var float
     */
    public $tax;

    /**
     * Fees other than the base rate and taxes that influence the final price of
     * a room. The <OtherFees> element takes a single required attribute,
     * currency, that defines the three-letter currency code for the fees. For
     * example, use "USD" for US dollars.
     *
     * @var float
     */
    public $otherFees;

    /**
     * The unique ID for the package data. Use this ID to match the Room Bundle
     * data with what was sent in <PackageData>. For more information, refer to
     * Room Bundle metadata. (You can also use this ID to reference a common
     * Room Bundle definition used in a single Transaction message when defining
     * Room Bundle data inline.)
     *
     * @var string
     */
    public $packageID;

    /**
     * The Rate Plan ID represents the unique identifier for a room and package
     * combination. For example, given a <RoomID> value of 5 and a <PackageID>
     * value of ABC, you could use a value of 5-ABC for <RatePlanID>. We
     * strongly recommend using RatePlanID as a variable to build your dynamic
     * landing page (formerly Point of Sale) URL.
     *
     * For more information, refer to Using Variables and Conditions.
     *
     * @var string
     */
    public $ratePlanID;

    /**
     * Enables listing a rate as being fully refundable or providing a free
     * cancellation. If not provided, no information about a refund is
     * displayed. A refund policy at the <PackageData> level overrides the
     * refund policy at the <Result> level. A refund policy at the <Rates> level
     * overrides the refund policy at the <PackageData> level. Refundable
     * pricing can also be highlighted to users through alternative options
     * without directly modifying your transaction message schema. Learn more
     * about these options here.
     *
     * The following example shows the <Refundable> element with all of its
     * attributes set:
     *
     *   <Refundable available="1" refundable_until_days="7" refundable_until_time="18:00:00"/>
     *
     * Note: We recommend setting all of the attributes. A feed status warning
     * message is generated when one or more attributes are not set.
     *
     * If you do not set any attributes, the rate does not display as
     * refundable. The attributes are:
     *
     *  * available: (Required) Set to 1 or true to indicate if the rate allows
     *    a full refund; otherwise set to 0 or false.
     *  * refundable_until_days: (Required if available is true) Specifies the
     *    number of days in advance of check-in that a full refund can be
     *    requested. The value of refundable_until_days must be an integer
     *    between 0 and 330, inclusive.
     *  * refundable_until_time: (Highly recommended if available is true)
     *    Specifies the latest time of day, in the local time of the hotel, that
     *    a full refund request will be honored. This can be combined with
     *    refundable_until_days to specify, for example, that "refunds are
     *    available until 4:00PM two days before check-in". If
     *    refundable_until_time isn't set, the value defaults to midnight.
     *
     *    The value of this attribute uses the Time format.
     *
     * When setting the attributes, note the following:
     *
     *  * If available or refundable_until_days isn't set, the rate does not display as refundable.
     *  * If available is 0 or false, the other attributes are ignored. The rate does not display as refundable even if one or both of the other attributes is set.
     *
     * @var Refundable
     */
    public $refundable;

    /**
     * The unique ID for the room data. Use this ID to match the Room Bundle
     * data with what you sent in <RoomData>. For more information, refer to
     * Room Bundle metadata. (You can also use this ID to reference a common
     * room definition in a single Transaction message when defining room data
     * inline.)
     *
     * @var string
     */
    public $roomID;

    /**
     * The maximum number of guests for which a Room Bundle is intended. For
     * example, a large suite might be able to physically accommodate 6 guests,
     * but the "Honeymoon Package" is intended for 2 guests only.
     * This value must be less than or equal to the <Capacity>, which is the
     * number of people that the room can physically accommodate.
     *
     * When setting the occupancy in a landing pages file, use the NUM-ADULTS
     * attribute, as described in Using Variables and Conditions. The default
     * value is "2".
     *
     * The value of <Occupancy> must be a positive integer between 1 and 20,
     * inclusive.
     *
     * Notes:
     *
     *  * <Occupancy> may be accompanied by <OccupancyDetails>, which specifies
     *    the type of guests (adults or children). Consult <OccupancyDetails>
     *    for syntax and description of child elements.
     *  * If you specify <Occupancy> in both <RoomBundle> and <PackageData>, the
     *    value in <RoomBundle> takes precedence.
     *
     * @var int
     */
    public $occupancy;

    /**
     * Specifies the maximum number of guests for a room or package.
     * <OccupancyDetails> can contain additional information such as the number
     * and type of guests (adults or children).
     *
     * @var OccupancyDetails
     */
    public $occupancyDetails;

    /**
     * Rates that override the defaults for this Room Bundle. This element uses
     * the same syntax as <Rates> in <Result>.
     *
     * @var Rates
     */
    public $rates;

    /**
     * A container for information on priced physical descriptions of a room,
     * any packaging of amenities, and some purchase policy details for the
     * given hotel and itinerary.
     * In general, use this element to define pricing for the base room and
     * different types of rooms within the same property. While it is possible
     * to define Room Bundle descriptions inline, you should use a separate
     * Transaction message to define that information. Google will store
     * metadata so that you can reference it, rather than repeat it, in all
     * future pricing updates.
     *
     * @var RoomBundle
     */
    public $roombundle;

    /**
     * One or more landing pages that are eligible for the hotel. A landing page
     * is a website that can handle the booking process for the end-user. To
     * explicitly include certain landing page (and exclude others), add one
     * or more <AllowablePointsOfSale> elements that match the <PointOfSale>
     * element's id attribute in the landing pages file.
     *
     * If you do not include this element, all landing pages defined in the
     * landing pages file are considered eligible to be used for booking the
     * room. For more information, refer to Landing Pages File Syntax.
     *
     * @var AllowablePointsOfSale
     */
    public $allowablePointsOfSale;

    /**
     * Custom fields for passing additional data to the landing pages for the
     * Room Bundle. These elements use the same syntax as <Custom[1-5]> in
     * <Result>. There is a limit of 200 characters per custom field. For more
     * information, refer to landing page files.
     *
     * @var string
     */
    public $custom1;

    /**
     * @see self::$custom1
     */
    public $custom2;

    /**
     * @see self::$custom1
     */
    public $custom3;

    /**
     * @see self::$custom1
     */
    public $custom4;

    /**
     * @see self::$custom1
     */
    public $custom5;
}
