<?php

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Refundable
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Refundable
{
    /**
     * (Required) Set to 1 or true to indicate if the rate allows a full refund;
     * otherwise set to 0 or false.
     *
     * @var bool
     */
    public $available;

    /**
     * (Required if available is true) Specifies the number of days in advance
     * of check-in that a full refund can be requested. The value
     * of refundable_until_days must be an integer between 0 and 330, inclusive.
     *
     * @var int
     */
    public $refundable_until_days;

    /**
     * (Highly recommended if available is true) Specifies the latest time
     * of day, in the local time of the hotel, that a full refund request will
     * be honored. This can be combined with refundable_until_days to specify,
     * for example, that "refunds are available until 4:00PM two days before
     * check-in". If refundable_until_time isn't set, the value defaults
     * to midnight.
     *
     * The value of this attribute uses the Time format.
     *
     * @var string
     */
    public $refundable_until_time;
}
