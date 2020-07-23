<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * MilesIncluded.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class MilesIncluded extends Base
{
    /**
     * Number of miles per itinerary.
     *
     * @var string
     */
    public $NumberofMiles;

    /**
     * Frequent flyer miles provide.
     *
     * @var LocalisedText
     */
    public $Provider;

    public function __construct(string $NumberofMiles = null, LocalisedText $Provider = null)
    {
        $this->NumberofMiles = $NumberofMiles;
        $this->Provider = $Provider;
    }
}
