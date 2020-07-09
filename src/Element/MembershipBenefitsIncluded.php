<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * MembershipBenefitsIncluded
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class MembershipBenefitsIncluded
{
    /**
     * Name of the elite status program
     *
     * @var Text[]
     */
    public $ProgramName = [];

    /**
     * Level of the program, e.g., “Gold.”
     *
     * @var Text[]
     */
    public $ProgramLevel = [];

    /**
     * (optional) Nightly value of the benefits.
     *
     * @var MonetaryValue
     */
    public $NightlyValue;
}
