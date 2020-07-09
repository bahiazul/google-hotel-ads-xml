<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Stay
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Stay extends Element
{
    /**
     * The check-in date for the itinerary.
     *
     * @var string
     */
    public $CheckInDate;

    /**
     * The number of nights for the itinerary, expressed as a positive integer.
     *
     * @var int
     */
    public $LengthOfStay;
}
