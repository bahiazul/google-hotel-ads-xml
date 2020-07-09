<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * PointOfSale
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class PointOfSale extends Base
{
    /**
     * @var string
     */
    public $id;

    public function __construct(string $id = null)
    {
        $this->id = $id;
    }
}
