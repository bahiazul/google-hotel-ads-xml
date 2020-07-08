<?php

namespace Bahiazul\GoogleHotelAds\Xml\Element;

/**
 * PricingInfoTrait
 *
 * @author Javier Zapata <javierzapata82@gmail.com>
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
trait PricingInfoTrait
{
    /**
     * The price of the room for the stay. The value of this element should
     * reflect the following:
     *
     * * For a private room, set the least expensive double-occupancy rate that
     *   you offer.
     * * For a shared room, leave empty and use <RoomBundle>.
     * * The total length of a stay, not the average nightly rate.
     *
     * When the room is unavailable for the itinerary, set the value of
     * the <Baserate> element to "-1" to indicate that a room is no longer in
     * inventory. In such cases, you won't receive a Live Query. If, however,
     * no <Baserate> element is given, a Live Query will be sent.
     *
     * To remove a Room Bundle, use the instructions in Removing a Room Bundle.
     *
     * The <Baserate> must not contain any digit grouping symbols, such as
     * a comma (,) or period (.). Always separate fractions using a period (.)
     * as the decimal mark. For example, represent $1,200.40 as:
     *
     *   <Baserate currency="USD">1200.40</Baserate>
     *
     * The <Baserate> element takes the following optional attributes:
     *
     * * all_inclusive: A Boolean that indicates if this rate includes taxes
     *   and fees. In general, set this value to "false" for US and Canadian
     *   end-users and supply values for the <Tax> and <OtherFees> elements.
     *   If you use all-inclusive prices, you may not be eligible to appear
     *   in the listings if your prices do not separate out taxes and fees for
     *   US and Canadian users.
     *   For all other end-users, you typically include the taxes and fees in
     *   the base rate and set the value of the all_inclusive attribute to
     *   "true". For more information, refer to Taxes and Fees Policy.
     *   The default value is "false".
     * * currency: The 3-letter currency code. For example, "USD" for US
     *   dollars.
     *
     * @var Baserate
     */
    public $Baserate;

    /**
     * The taxes that are calculated for the final price of a room. The <Tax>
     * element takes a single required attribute, currency, that defines the
     * three-letter currency code for the taxes. For example, "USD". The <Tax>
     * element is required if <Baserate> is greater than zero.
     *
     * @var Tax
     */
    public $Tax;

    /**
     * Fees other than the base rate and taxes that influence the final price of
     * a room. The <OtherFees> element takes a single required attribute,
     * currency, that defines the three-letter currency code for the fees. For
     * example, "USD".
     *
     * The <OtherFees> element is required if <Baserate> is greater than zero.
     *
     * @var OtherFees
     */
    public $OtherFees;
}
