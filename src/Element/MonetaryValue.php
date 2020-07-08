<?php

namespace Bahiazul\GoogleHotelAds\Xml\Element;

/**
 * MonetaryValue
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
abstract class MonetaryValue
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $value;
}
