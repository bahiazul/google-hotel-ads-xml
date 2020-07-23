<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Child.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Child extends Base
{
    /**
     * @var string
     */
    public $age;

    public function __construct(string $age = null)
    {
        $this->age = $age;
    }
}
