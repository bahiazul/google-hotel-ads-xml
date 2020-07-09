<?php

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * DateRangeTrait
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
trait DateRangeTrait
{
    /**
     * The first date of the date range for a check-in range or ranged stay Hint
     * Response message. Dates are inclusive.
     *
     * @var string
     */
    public $FirstDate;

    /**
     * The last date of the date range for a check-in range or ranged stay Hint
     * Response message. Dates are inclusive.
     *
     * \* This element is optional for ranged stays.
     *
     * @var string
     */
    public $LastDate;
}
