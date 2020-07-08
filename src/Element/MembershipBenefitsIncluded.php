<?php

namespace Bahiazul\GoogleHotelAds\Xml\Element;

/**
 * MembershipBenefitsIncluded
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class MembershipBenefitsIncluded
{
    /**
     * Name of the elite status program
     *
     * @var ProgramName
     */
    public $ProgramName;

    /**
     * Level of the program, e.g., “Gold.”
     *
     * @var ProgramLevel
     */
    public $ProgramLevel;

    /**
     * (optional) Nightly value of the benefits.
     *
     * @var NightlyValue
     */
    public $NightlyValue;
}
