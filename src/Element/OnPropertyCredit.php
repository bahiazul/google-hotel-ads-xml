<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * OnPropertyCredit.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class OnPropertyCredit extends Base
{
    /**
     * The value of the credit per itinerary, in local currency.
     *
     * @var MonetaryValue
     */
    public $Amount;

    public function __construct(MonetaryValue $Amount = null)
    {
        $this->Amount = $Amount;
    }
}
