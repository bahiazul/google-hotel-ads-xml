<?php

namespace Bahiazul\GoogleHotelAds\Xml;

class OccupancyDetails extends Base
{
    /**
     * A unique identifier for each Transaction message.
     *
     * @var string
     */
    public $id;

    /**
     * The moment in time that the Transaction message was sent.
     *
     * Any message sent with a timestamp within the prior 24 hours will
     * be processed, and those that haven't will be discarded.
     *
     * Messages are processed in order of timestamp and not in the order
     * of being received. For example, a price update with a timestamp
     * of 2019-05-03 14:09:00 that is received after a message with a timestamp
     * of 2019-05-03 14:10:00 will still be processed in order, and the price
     * from the message with the timestamp of 2019-05-03 14:10:00 will be used.
     *
     * @var DateTime
     */
    public $timestamp;

    /**
     * The partner account that the Transaction message is for. You typically
     * use this if your back end provides price feeds for multiple partner
     * accounts. To get the value of your partner attribute, contact us.
     *
     * @var string
     */
    public $partner;

    /**
     * Describes a specific room and Room Bundles. You typically use this
     * element in a separate Transaction message to define shared values for
     * Room Bundles and reduce the size of your Transaction messages.
     *
     * @var PropertyDataSet
     */
    public $propertyDataSet;

    /**
     * Pricing data for a room's itinerary or a <RoomBundle> element that
     * defines Room Bundles and additional types of rooms for the property.
     * The <Result> element can also be used to remove itineraries from
     * inventory.
     *
     * @var Result[]
     */
    public $result;
}
