<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * StaysIncludingRange.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class StaysIncludingRange extends Base
{
    use DateRangeTrait;

    public function __construct(string $FirstDate = null, string $LastDate = null)
    {
        $this->FirstDate = $FirstDate;
        $this->LastDate = $LastDate;
    }
}
