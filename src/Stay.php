<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class Stay extends Base
{
    /**
     * The check-in date for the itinerary.
     *
     * @var string
     */
    public $checkInDate;

    /**
     * The number of nights for the itinerary, expressed as a positive integer.
     *
     * @var int
     */
    public $lengthOfStay;
}
