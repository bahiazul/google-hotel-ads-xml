<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * LocalisedText.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class LocalisedText extends Base
{
    /**
     * @var Text[]
     */
    public $Text = [];

    public function __construct(array $Text = [])
    {
        $this->Text = $Text;
    }
}
