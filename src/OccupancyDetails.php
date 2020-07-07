<?php

namespace Bahiazul\GoogleHotelAds\Xml;

use Sabre\Xml;

class OccupancyDetails extends Base
{
    /**
     * The number of adult guests. Min:1, Max:20.
     *
     * @var int
     */
    public $numAdults;

    /**
     * Whether any guests are children.
     *
     * @var Children
     */
    public $children;
}
