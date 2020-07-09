<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * The root element of a Query message. Query messages are requests from Google
 * for pricing or metadata updates. They are used with both the Pull and Pull
 * with Hints delivery modes.
 *
 * There are two types of Query messages:
 *
 * * Pricing: Google requests pricing updates for the specified hotels. When you
 *   receive a pricing Query message, you should respond with a <Transaction>
 *   message that contains the requested pricing information in <Result>
 *   elements.
 *   Live Queries are a special type of pricing Query message in which Google
 *   asks for real-time price updates.
 *   For more information, consult Pricing Overview.
 * * Metadata: Google requests metadata updates for the rooms and Room Bundles
 *   for the specified hotels. When you receive a metadata Query message, you
 *   should respond with a <Transaction> message that specifies data about the
 *   rooms and Room Bundles in <PropertyDataSet> elements.
 *   For more information, consult Room Bundle metadata.
 *
 * The syntax for the messages is different, depending on the type. Both types
 * are described in this section.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Query implements \Sabre\Xml\XmlDeserializable
{
    /**
     * When provided and set to true, it indicates that the query is a live
     * query. To have Google send queries with the <LatencySensitive> attribute,
     * please send a request to your technical account manager.
     *
     * @var bool
     */
    public $latencySensitive;

    /**
     * The dates of a specific price change.
     *
     * @var string
     */
    public $Checkin;

    /**
     * The number of nights for a particular itinerary, up to 14.
     *
     * @var int
     */
    public $Nights;

    use DateRangeTrait;

    /**
     * The number of nights for a ranged stay. This element is used only for
     * Ranged Stay pricing queries used with Pull with Hints.
     *
     * @var int
     */
    public $AffectedNights;

    /**
     * One or more IDs for hotel that require pricing updates.
     *
     * Define each hotel in a <Property> element. The value is a string that
     * matches a hotel ID in your Hotel List Feed. For example:
     *
     *   <PropertyList>
     *     <Property>pid1</Property>
     *     <Property>pid2</Property>
     *   </PropertyList>
     *
     * @var Property[]
     */
    public $PropertyList = [];

    /**
     * The amount of time, in milliseconds, that you have to respond to a Live
     * Query. If you respond with a price within this amount of time, then your
     * ad can be included in the auction. If you do not respond within this
     * amount of time, then you risk not being part of the auction.
     *
     * The DeadlineMs element is optional. When provided and set to true, it
     * indicates that the query is a live query. To have Google send queries
     * with the DeadlineMs element, please send a request to your technical
     * account manager.
     *
     * For more information, consult Live Queries.
     *
     * @var int
     */
    public $DeadlineMs;

    /**
     * For Live Queries, specifies certain parameters under which the query is
     * made. Child elements include:
     *
     * * <Occupancy>: the total number of guests
     * * <OccupancyDetails>: the type of guests, such as adults or children
     * * <UserCountry>: the country where the user is located
     * * <UserDevice>: the type of device the customer used to search for a
     *   hotel, such as "mobile," "tablet," or "desktop."
     *
     * The <Context> element may be repeated in a single request, allowing
     * queries for different occupancies. Consult <Context> for a list of child
     * elements, syntax, and examples.
     *
     * @var Context[]
     */
    public $Context = [];

    /**
     * One or more properties for which Google wants updated room and Room
     * Bundle metadata in a metadata Query message. This element can contain one
     * or more <Property> elements that specify hotel property IDs.
     *
     * @var Property[]
     */
    public $HotelInfoProperties = [];

    public static function xmlDeserialize(Sabre\Xml\Reader $reader)
    {
        $ns = '{}';
        $object = new self();

        foreach ($reader->parseAttributes() as $key => $value) {
            if (property_exists($object, $key)) {
                $object->{$key} = $value;
            }
        }

        $kvs = Sabre\Xml\Element\KeyValue::xmlDeserialize($reader);
        foreach ($kvs as $key => $value) {
            $property = str_replace($ns, '', $key, 1);
            if (isset($value)) {
                $object->{$property} = $value;
            }
        }

        return $object;
    }
}
