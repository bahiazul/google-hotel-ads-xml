<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class Result extends Base
{
    use OccupancyInfoTrait;
    use PricingInfoTrait;

    /**
     * The ID of a hotel affected by the associated data (price, itinerary,
     * Room Bundle, or metadata). The value of this element must be a string.
     * The value of this element must match the listing <id> that you defined
     * in your Hotel List Feed.
     *
     * @var string
     */
    public $property;

    /**
     * The check-in date for an itinerary using the Date format. The combination
     * of the <Nights> element and the <Checkin> element make up an itinerary.
     *
     * @var string
     */
    public $checkin;

    /**
     * The number of nights for an itinerary. The value of the <Nights> element
     * must be a positive integer. The combination of <Nights> and <Checkin>
     * make up an itinerary.
     *
     * @var int
     */
    public $nights;

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
     * * available: (Required) Set to 1 or true to indicate if the rate allows
     *   a full refund; otherwise set to 0 or false.
     * * refundable_until_days: (Required if available is true) Specifies the
     *   number of days in advance of check-in that a full refund can be
     *   requested. The value of refundable_until_days must be an integer
     *   between 0 and 330, inclusive.
     * * refundable_until_time: (Highly recommended if available is true)
     *   Specifies the latest time of day, in the local time of the hotel, that
     *   a full refund request will be honored. This can be combined with
     *   refundable_until_days to specify, for example, that "refunds are
     *   available until 4:00PM two days before check-in". If
     *   refundable_until_time isn't set, the value defaults to midnight.
     *
     *   The value of this attribute uses the Time format.
     *
     * When setting the attributes, note the following:
     *
     * * If available or refundable_until_days isn't set, the rate does not
     *   display as refundable.
     * * If available is 0 or false, the other attributes are ignored. The rate
     *   does not display as refundable even if one or both of the other
     *   attributes is set.
     *
     * @var Refundable
     */
    public $refundable;

    /**
     * The unique ID of the room to map it to pre-defined room or package data.
     * For more information, refer to Room Bundle metadata.
     *
     * @var string
     */
    public $roomID;

    /**
     * The date and time at which the price is considered expired (3 hours
     * minimum).
     *
     * We recommend that you don't provide expiration timestamps if it isn't
     * critical to your pricing structure.
     *
     * Google will not serve any prices that are expired, and any itinerary that
     * has an expired price will become eligible for Live Querying.
     *
     * @var DateTime
     */
    public $expirationTime;

    /**
     * When and where the user pays for a booking. This element can be used in
     * a Transaction message in the <Result> element for the Hotel Price or
     * <PackageData> block for a Room Bundle.
     * Valid values are:
     *
     * * "web": The user is charged online at the time of booking. This is the
     *   default value. The actual landing page is defined by the landing page
     *   file, and can be affected by the user's currency, location, language,
     *   or other factors.
     * * "hotel": The user is charged when checking in at the hotel. If payment
     *   must always be made in the hotel's currency, set the value of
     *   <ChargeCurrency> to "hotel". The actual landing page is not affected
     *   by the user's currency.
     * * "deposit": The user is charged some portion immediately and the
     *   remainder is charged at a later point in time, typically when the user
     *   checks out of the hotel.
     * * "installment": The user is charged an initial fraction of the total
     *   sum due and is expected to routinely pay a set balance over a fixed
     *   period of time.
     *
     * The default value is "web".
     *
     * @var string
     */
    public $chargeCurrency;

    /**
     * A container for one or more <Rate> blocks. Each <Rate> in <Rates> defines
     * a different price for the room/itinerary combination.
     *
     * Use the <Rates> element only when there are multiple rates for the same
     * room/itinerary combination. For example, you define multiple rates for
     * conditional rates, private rates, or conditional rates in Room Bundles).
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
     * Defines a custom field that you can use to pass additional data
     * associated with a hotel.
     *
     * The <Custom> elements let you pass arbitrary data. For example, you can
     * specify a value in this field that will then be used by the landing pages
     * file to construct a custom URL for a landing page. There is a limit of
     * 200 characters per custom field. For more information, refer to landing
     * page files.
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
