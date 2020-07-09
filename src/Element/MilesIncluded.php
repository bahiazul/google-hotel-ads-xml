<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * MilesIncluded
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class MilesIncluded
{
    /**
     * Number of miles per itinerary
     *
     * @var int
     */
    public $NumberofMiles;

    /**
     * Frequent flyer miles provide
     *
     * @var Text
     */
    public $Provider = [];
}
