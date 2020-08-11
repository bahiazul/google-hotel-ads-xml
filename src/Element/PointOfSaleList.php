<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * PointOfSaleList.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class PointOfSaleList extends Base
{
    /**
     * PointOfSale.
     *
     * @var PointOfSale[]
     */
    public $PointOfSale = [];

    public function __construct(array $PointOfSale = [])
    {
        $this->PointOfSale = $PointOfSale;
    }
}
