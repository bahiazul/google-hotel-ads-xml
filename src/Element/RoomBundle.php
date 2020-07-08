<?php

namespace Bahiazul\GoogleHotelAds\Xml\Element;

/**
 * RoomBundle
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class RoomBundle
{
    use CustomInfoTrait;
    use OccupancyInfoTrait;
    use PricingInfoTrait;

    /**
     * The unique ID for the package data. Use this ID to match the Room Bundle
     * data with what was sent in <PackageData>. For more information, refer to
     * Room Bundle metadata. (You can also use this ID to reference a common
     * Room Bundle definition used in a single Transaction message when defining
     * Room Bundle data inline.)
     *
     * @var string
     */
    public $PackageID;

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
    public $RatePlanID;

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
    public $Refundable;

    /**
     * The unique ID for the room data. Use this ID to match the Room Bundle
     * data with what you sent in <RoomData>. For more information, refer to
     * Room Bundle metadata. (You can also use this ID to reference a common
     * room definition in a single Transaction message when defining room data
     * inline.)
     *
     * @var string
     */
    public $RoomID;

    /**
     * Rates that override the defaults for this Room Bundle. This element uses
     * the same syntax as <Rates> in <Result>.
     *
     * @var Rates
     */
    public $Rates;

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
    public $RoomBundle;

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
    public $AllowablePointsOfSale;
}
