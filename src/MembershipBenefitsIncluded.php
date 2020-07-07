<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class MembershipBenefitsIncluded extends Base
{
    /**
     * Name of the elite status program
     *
     * @var ProgramName
     */
    public $programName;

    /**
     * Level of the program, e.g., “Gold.”
     *
     * @var ProgramLevel
     */
    public $programLevel;

    /**
     * (optional) Nightly value of the benefits.
     *
     * @var NightlyValue
     */
    public $nightlyValue;
}
