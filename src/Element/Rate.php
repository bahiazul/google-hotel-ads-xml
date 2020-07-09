<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Rate
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Rate
{
    /**
     * For conditional rates, this ID matches a rate to a definition in your
     * Rate Rule Definition file. The character limit for this field is 40
     * characters.
     *
     * @var string
     */
    public $rate_rule_id;

    use PricingInfoTrait;

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
     * The date and time at which the rate is considered expired. This element
     * uses the same syntax as an <ExpirationTime> in a <Result>.
     *
     * @var DateTime
     */
    public $ExpirationTime;

    /**
     * When and where the user pays for a booking. This element uses the same
     * syntax as a <ChargeCurrency> in a <Result>.
     *
     * @var string
     */
    public $ChargeCurrency;

    /**
     * One or more landing pages that are eligible for the hotel. This element
     * uses the same syntax as the <AllowablePointsOfSale> on <Result>.
     *
     * @var PointOfSale[]
     */
    public $AllowablePointsOfSale;

    use OccupancyInfoTrait;

    use CustomInfoTrait;
}
