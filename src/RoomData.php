<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class RoomData extends Base
{
    /**
     * The unique ID for the room. Use this ID to match the room data with the
     * <Result> blocks in your pricing updates. For more information, refer to
     * Room Bundle metadata. (You can also use this ID to reference a common
     * room definition in a single Transaction message when defining room data
     * inline.)
     *
     * @var string
     */
    public $roomID;

    /**
     * The name of the category of room. This value should match what appears
     * on the hotel's landing page (formerly point of sale). Do not set the
     * value of this element to all capital letters.
     *
     * This element takes a single child element, <Text>, which has the
     * following two required attributes:
     *
     *  * text: The name of the room.
     *  * language: A two-letter language code; for example, "fr".
     *
     * Use a separate <Text> element for each language in which your ad might
     * appear (with different values for the language attributes).
     *
     * The following example shows French and English versions of the room name:
     *
     *     <Name>
     *       <Text text="Standard Double Room" language="en"/>
     *       <Text text="Le chambre double" language="fr"/>
     *     </Name>
     *
     * @var Name
     */
    public $name;

    /**
     * A detailed description of the room. This element should contain
     * information not described by other elements or the <Name> element. You
     * should not use all capital letters when specifying the description of
     * the room.
     *
     * The <Description> element takes a single child element, <Text>, which has
     * the following two required attributes:
     *
     * * text: A detailed description of the room.
     * * language: A two-letter language code; for example, "fr".
     *
     * Use a separate <Text> element for each language in which your ad might
     * appear (with different values for the language attributes).
     *
     * The following example shows French and English versions of the room
     * description:
     *
     *     <Description>
     *       <Text text="Two queen-sized beds" language="en"/>
     *       <Text text="Deux lits de la reine" language="fr"/>
     *     </Description>
     *
     * @var Description
     */
    public $description;

    /**
     * The maximum number of guests that a room can physically accommodate. For
     * a room, capacity is greater than or equal to occupancy.
     *
     * When specified, this value must be equal to or greater than the value
     * of the <Occupancy> element, which is the intended number of guests for
     * a particular room. For example, a large suite's <Capacity> might be 6,
     * but the <Occupancy> for is 4.
     *
     * The value of <Capacity> must be a positive integer between 1 and 20,
     * inclusive.
     *
     * @var int
     */
    public $capacity;

    /**
     * The maximum number of guests that a room is intended for. For example,
     * a large suite might be able to physically accommodate 6 guests
     * (capacity = 6), but is intended for up to 4 guests only.
     *
     * This value must be less than or equal to the <Capacity> element, which is
     * the number of people that the room can physically accommodate.
     *
     * The value of <Occupancy> must be a positive integer between 1 and 20,
     * inclusive.
     *
     * <Occupancy> may be accompanied by <OccupancyDetails>, which specifies
     * the type of guests (adults or children). Refer to <OccupancyDetails> for
     * syntax and description of child elements.
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
     * A URL and optional caption for a photo of the given room or Room Bundle.
     * You can specify more than one <PhotoURL> for a room or Room Bundle.
     *
     * This element takes the following child elements:
     *
     *  * <URL>: Specifies the location of the photo. The location should be
     *    public (not behind a firewall) and should include the protocol
     *    (http://).
     *  * <Caption>: Defines the caption for the photo. This element takes
     *    a single child element, <Text>, which has two required attributes,
     *    text and language. The text attribute is the caption, and the language
     *    attribute specifies a two-letter language code such as "en".
     *
     *     <PhotoURL>
     *       <URL>http://www.foo.com/static/bar/image1234.jpg</URL>
     *       <Caption>
     *         <Text text="A bright and breezy way to enjoy your mornin' cuppa tea." language="en"/>
     *         <Text text="Une façon lumineuse et aérée pour profiter de votre journée tasse de thé." language="fr"/>
     *       </Caption>
     *     </PhotoURL>
     *
     * @var PhotoURL
     */
    public $photoURL;
}
