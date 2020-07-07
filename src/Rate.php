<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class Rate extends Base
{
    /**
     * For conditional rates, this ID matches a rate to a definition in your
     * Rate Rule Definition file. The character limit for this field is 40
     * characters.
     *
     * @var string
     */
    public $rate_rule_id;

    /**
     * The price of the room for the stay. This element uses the same syntax as
     * the <Baserate> on <Result>.
     *
     * Note: The <Baserate> child element under <Rate> cannot be defined as
     * being unavailable (-1).
     *
     * @var float
     */
    public $baserate;

    /**
     * Undocumented variable
     *
     * @var float
     */
    public $tax;

    /**
     * Fees other than the base rate and taxes that influence the final price of
     * a room. This element uses the same syntax as <OtherFees> in a <Result>.
     *
     * @var float
     */
    public $otherFees;

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
     *  * If available or refundable_until_days isn't set, the rate does not
     *    display as refundable.
     *  * If available is 0 or false, the other attributes are ignored. The rate
     *    does not display as refundable even if one or both of the other
     *    attributes is set.
     *
     * @var Refundable
     */
    public $refundable;

    /**
     * The date and time at which the rate is considered expired. This element
     * uses the same syntax as an <ExpirationTime> in a <Result>.
     *
     * @var DateTime
     */
    public $expirationTime;

    /**
     * When and where the user pays for a booking. This element uses the same
     * syntax as a <ChargeCurrency> in a <Result>.
     *
     * @var string
     */
    public $chargeCurrency;

    /**
     * Specifies the maximum number of occupants. <Occupancy> may be accompanied
     * by <OccupancyDetails>, which specifies the type of guests (adults or
     * children). Consult <OccupancyDetails> for syntax and description of child
     * elements.
     *
     * @var int
     */
    public $occupancy;

    /**
     * Specifies the maximum number of guests for a room or package.
     * <OccupancyDetails> can contain additional information such as the number
     * and type of guests (adults or children).
     *
     * When <Occupancy> and <OccupancyDetails> appear within the <Rates> element
     * of <Result> or <RoomBundle>, it means that the rate is constrained by the
     * occupancy details.
     *
     * @var OccupancyDetails
     */
    public $occupancyDetails;

    /**
     * One or more landing pages that are eligible for the hotel. This element
     * uses the same syntax as the <AllowablePointsOfSale> on <Result>.
     *
     * @var AllowablePointsOfSale
     */
    public $allowablePointsOfSale;

    /**
     * Custom fields that you can use to pass additional data associated with
     * a hotel to a landing page. This element uses the same syntax as a
     * <Custom[1‑5]> in a <Result>. There is a limit of 200 characters per
     * custom field. For more information, refer to landing page files.
     *
     * @var string
     */
    public $custom1;

    /**
     * @see self::$custom1
     *
     * @var string
     */
    public $custom2;

    /**
     * @see self::$custom1
     *
     * @var string
     */
    public $custom3;

    /**
     * @see self::$custom1
     *
     * @var string
     */
    public $custom4;

    /**
     * @see self::$custom1
     *
     * @var string
     */
    public $custom5;
}
