<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * RoomBundle.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class RoomBundle extends Base
{
    /**
     * The unique ID for the room data. Use this ID to match the Room Bundle
     * data with what you sent in <RoomData>. For more information, refer to
     * Room Bundle metadata. (You can also use this ID to reference a common
     * room definition in a single Transaction message when defining room data
     * inline.).
     *
     * @var string
     */
    public $RoomID;

    /**
     * The unique ID for the package data. Use this ID to match the Room Bundle
     * data with what was sent in <PackageData>. For more information, refer to
     * Room Bundle metadata. (You can also use this ID to reference a common
     * Room Bundle definition used in a single Transaction message when defining
     * Room Bundle data inline.).
     *
     * @var string
     */
    public $PackageID;

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

    use OccupancyInfoTrait;

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
     * Rates that override the defaults for this Room Bundle. This element uses
     * the same syntax as <Rates> in <Result>.
     *
     * @var array
     */
    public $Rates = [];

    use CustomInfoTrait;

    public function __construct(
        string $RoomID = null,
        string $PackageID = null,
        MonetaryValue $Baserate = null,
        MonetaryValue $Tax = null,
        MonetaryValue $OtherFees = null,
        Refundable $Refundable = null,
        int $Occupancy = null,
        OccupancyDetails $OccupancyDetails = null,
        string $RatePlanID = null,
        array $Rates = null,
        array $Custom1 = null,
        array $Custom2 = null,
        array $Custom3 = null,
        array $Custom4 = null,
        array $Custom5 = null
    ) {
        $this->RoomID = $RoomID;
        $this->PackageID = $PackageID;

        $this->Baserate = $Baserate;
        $this->Tax = $Tax;
        $this->OtherFees = $OtherFees;

        $this->Refundable = $Refundable;

        $this->Occupancy = $Occupancy;
        $this->OccupancyDetails = $OccupancyDetails;

        $this->RatePlanID = $RatePlanID;
        $this->Rates = $Rates;

        $this->Custom1 = $Custom1;
        $this->Custom2 = $Custom2;
        $this->Custom3 = $Custom3;
        $this->Custom4 = $Custom4;
        $this->Custom5 = $Custom5;
    }
}
