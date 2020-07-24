<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * PropertyList.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class PropertyList extends Base
{
    /**
     * Property.
     *
     * @var string[]
     */
    public $Property = [];

    public function __construct(array $Property = null)
    {
        $this->Property = $Property;
    }
}
