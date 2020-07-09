<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Text
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Text extends Element
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $language;

    public function __construct(string $text = null, string $language = null)
    {
        $this->language = $language;
        $this->text = $text;
    }
}
