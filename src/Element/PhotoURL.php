<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * PhotoURL
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class PhotoURL
{
    /**
     * Defines the caption for the photo. This element takes a single child
     * element, <Text>, which has two required attributes, text and language.
     * The text attribute is the caption, and the language attribute specifies
     * a two-letter language code such as "en".
     *
     * @var Text[]
     */
    public $Caption = [];

    /**
     * Specifies the location of the photo. The location should be public
     * (not behind a firewall) and should include the protocol (http://).
     *
     * @var string
     */
    public $URL;
}
