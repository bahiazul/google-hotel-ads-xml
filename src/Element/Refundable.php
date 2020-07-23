<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Refundable.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Refundable extends Base
{
    /**
     * (Required) Set to 1 or true to indicate if the rate allows a full refund;
     * otherwise set to 0 or false.
     *
     * @var string
     */
    public $available;

    /**
     * (Required if available is true) Specifies the number of days in advance
     * of check-in that a full refund can be requested. The value
     * of refundable_until_days must be an integer between 0 and 330, inclusive.
     *
     * @var string
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

    public function __construct(
        string $available = null,
        string $refundable_until_days = null,
        string $refundable_until_time = null
    ) {
        $this->available = $available;
        $this->refundable_until_days = $refundable_until_days;
        $this->refundable_until_time = $refundable_until_time;
    }
}
