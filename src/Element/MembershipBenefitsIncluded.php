<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * MembershipBenefitsIncluded.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class MembershipBenefitsIncluded extends Base
{
    /**
     * Name of the elite status program.
     *
     * @var LocalisedText
     */
    public $ProgramName;

    /**
     * Level of the program, e.g., “Gold”.
     *
     * @var LocalisedText
     */
    public $ProgramLevel;

    /**
     * (optional) Nightly value of the benefits.
     *
     * @var MonetaryValue
     */
    public $NightlyValue;

    public function __construct(
        LocalisedText $ProgramName = null,
        LocalisedText $ProgramLevel = null,
        MonetaryValue $NightlyValue = null
    ) {
        $this->ProgramName = $ProgramName;
        $this->ProgramLevel = $ProgramLevel;
        $this->NightlyValue = $NightlyValue;
    }
}
