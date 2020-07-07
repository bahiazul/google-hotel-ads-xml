<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class PackageData extends Base
{
    /**
     * The unique ID for the package. Use this ID to match the Room Bundle data
     * with the <Result> blocks in your pricing updates. For more information,
     * refer to Room Bundle metadata.
     *
     * (You can also use this ID to reference a common Room Bundle definition
     * used in a single Transaction message when defining Room Bundle data
     * inline.)
     *
     * @var string
     */
    public $packageID;

    /**
     * The name of the category of room. This value should match what appears
     * on the hotel's landing page. Do not set the value of this element to all
     * capital letters.
     *
     * This element takes a single child element, <Text>, which has two
     * attributes, text and language. The text attribute is the description,
     * and the language attribute specifies a two-letter language code, as the
     * following example shows:
     *
     *     <Name>
     *       <Text text="Bed and Breakfast" language="en"/>
     *       <Text text="Lit et petit déjeuné" language="fr"/>
     *     </Name>
     *
     * @var Name
     */
    public $name;

    /**
     * A detailed description of the package. This element should contain
     * information not described by other elements or the <Name> element.
     * You should not use all capital letters when specifying the description
     * of the room.
     *
     * The <Description> element takes a single child element,<Text>, which
     * has two required attributes, text and language. The text attribute is
     * the description, and the language attribute specifies a two-letter
     * language code, as the following example shows:
     *
     *     <Description>
     *       <Text text="Two breakfast buffet certificates for each night of stay." language="en"/>
     *       <Text text="Deux certificats petit-déjeuner buffet pour chaque nuit de séjour." language="fr"/>
     *     </Description>
     *
     * @var Description
     */
    public $description;

    /**
     * Enables listing a rate as being fully refundable or providing a free
     * cancellation. If not provided, no information about a refund is
     * displayed. A refund policy at the <PackageData> level overrides the
     * refund policy at the <Result> level. A refund policy at the <Rates>
     * level overrides the refund policy at the <PackageData> level.
     *
     * Refundable pricing can also be highlighted to users through alternative
     * options without directly modifying your transaction message schema.
     * Learn more about these options here.
     *
     * The following example shows the <Refundable> element with all of its
     * attributes set:
     *
     *     <Refundable available="1" refundable_until_days="7" refundable_until_time="18:00:00"/>
     *
     * Note: We recommend setting all of the attributes. A feed status warning
     * message is generated when one or more attributes are not set.
     *
     * If you do not set any attributes, the rate does not display as
     * refundable. The attributes are:
     *
     * * available: (Required) Set to 1 or true to indicate if the rate allows
     *   a full refund; otherwise set to 0 or false.
     * * refundable_until_days: (Required if available is true) Specifies the
     *   number of days in advance of check-in that a full refund can be
     *   requested. The value of refundable_until_days must be an integer
     *   between 0 and 330, inclusive.
     * * refundable_until_time: (Highly recommended if available is true)
     *   Specifies the latest time of day, in the local time of the hotel, that
     *   a full refund request will be honored. This can be combined with
     *   refundable_until_days to specify, for example, that "refunds are
     *   available until 4:00PM two days before check-in".
     *   If refundable_until_time isn't set, the value defaults to midnight.
     * * The value of this attribute uses the Time format.
     *
     * When setting the attributes, note the following:
     *
     * * If available or refundable_until_days isn't set, the rate does not
     *   display as refundable.
     * * If available is 0 or false, the other attributes are ignored. The rate
     *   does not display as refundable even if one or both of the other
     *   attributes is set.
     *
     * @var Refundable
     */
    public $refundable;

    /**
     * When and where the user pays for a booking. This element uses the same
     * syntax as <ChargeCurrency> in a <Result>.
     *
     * The default value is web.
     *
     * @var string
     */
    public $chargeCurrency;

    /**
     * The maximum number of guests that a Room Bundle is intended for.
     * For example, a large suite might be able to physically accommodate
     * 6 guests, but is intended for up to 4 guests only.
     * This value must be less than or equal to the <Capacity> element, which
     * is the number of people that the room can physically accommodate.
     *
     * The value of <Occupancy> must be a positive integer between 1 and 20,
     * inclusive.
     *
     * If you specify this element in both <RoomBundle> and <PackageData>,
     * the value in <RoomBundle> takes precedence.
     *
     * Note:
     * <Occupancy> may be accompanied by <OccupancyDetails>, which specifies
     * the type of guests (adults or children). Refer to <OccupancyDetails>
     * for syntax and description of child elements.
     *
     * @var int
     */
    public $occupancy;

    /**
     * Specifies the maximum number of guests for a room or package.
     * <OccupancyDetails> can contain additional information such as the number
     * and type of guests (adults or children).
     *
     * @var OccupancyDetails
     */
    public $occupancyDetails;

    /**
     * Specifies whether this Room Bundle includes breakfast with the rate.
     *
     * @var boolean
     */
    public $breakfastIncluded;

    /**
     * If a Room Bundle includes internet access at no charge, while other
     * bundles would not include that amenity. Do not set this element for
     * Room Bundles in a hotel that provides free internet to all rooms.
     * This element does not apply to in-room wired internet or wireless
     * internet that is not available in guest rooms.
     *
     * @var boolean
     */
    public $internetIncluded;

    /**
     * Whether a Room Bundle includes parking at no charge, where parking would
     * otherwise be a paid service at this hotel. Do not specify a value for
     * this element for a hotel that offers free parking.
     * Valid values are 0 (or false) and 1 (or true). The default value
     * is false.
     *
     * @var bool
     */
    public $parkingIncluded;

    /**
     * Rate includes elite status benefits for duration of stay. Includes the
     * following parameters:
     *
     * * ProgramName: Name of the elite status program
     * * ProgramLevel: Level of the program, e.g., “Gold.”
     * * NightlyValue (optional): Nightly value of the benefits.
     *
     * @var MembershipBenefitsIncluded
     */
    public $membershipBenefitsIncluded;

    /**
     * Rate includes free car rental for duration of stay.
     *
     * @var bool
     */
    public $carRentalIncluded;

    /**
     * Rate includes frequent flyer miles. Parameters include:
     * * NumberofMiles: Number of miles per itinerary.
     * * Provider: Frequent flyer miles provide.
     *
     * @var MilesIncluded
     */
    public $milesIncluded;

    /**
     * Rate includes on-property credit (F&B, resort, spa, etc). Parameter:
     * * Amount: The value of the credit per itinerary, in local currency.
     *
     * @var OnPropertyCredit
     */
    public $onPropertyCredit;
}
