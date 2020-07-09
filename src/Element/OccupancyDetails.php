<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * OccupancyDetails
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class OccupancyDetails extends Element
{
    /**
     * The number of adult guests. Min:1, Max:20.
     *
     * @var int
     */
    public $NumAdults;

    /**
     * Whether any guests are children.
     *
     * @var Child[]
     */
    public $Children = [];

    public function __construct(int $NumAdults = null, array $Children = null)
    {
        $this->NumAdults = $NumAdults;
        $this->Children = $Children;
    }
}
