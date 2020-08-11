<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Children.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Children extends Base
{
    /**
     * Child.
     *
     * @var Child[]
     */
    public $Child = [];

    public function __construct(array $Child = [])
    {
        $this->Child = $Child;
    }
}
