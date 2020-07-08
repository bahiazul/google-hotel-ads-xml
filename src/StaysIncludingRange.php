<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class StaysIncludingRange extends Base
{
    /**
     * The first date of the date range for a check-in range or ranged stay Hint
     * Response message. Dates are inclusive.
     *
     * @var string
     */
    public $firstDate;

    /**
     * The last date of the date range for a check-in range or ranged stay Hint Response message. Dates are inclusive.
     *
     * \* This element is optional for ranged stays.
     *
     * @var string
     */
    public $lastDate;
}
