<?php

namespace Bahiazul\GoogleHotelAds\Xml\Element;

/**
 * CustomInfoTrait
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
trait CustomInfoTrait
{
    /**
     * Custom fields that you can use to pass additional data associated with
     * a hotel to a landing page. This element uses the same syntax as a
     * <Custom[1‑5]> in a <Result>. There is a limit of 200 characters per
     * custom field. For more information, refer to landing page files.
     *
     * @var string
     */
    public $Custom1;

    /**
     * @see self::$Custom1
     *
     * @var string
     */
    public $Custom2;

    /**
     * @see self::$Custom1
     *
     * @var string
     */
    public $Custom3;

    /**
     * @see self::$Custom1
     *
     * @var string
     */
    public $Custom4;

    /**
     * @see self::$Custom1
     *
     * @var string
     */
    public $Custom5;
}
