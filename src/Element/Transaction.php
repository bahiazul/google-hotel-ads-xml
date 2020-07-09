<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * Transaction
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Transaction extends Element
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
     * @var string
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
    public $PropertyDataSet;

    /**
     * Pricing data for a room's itinerary or a <RoomBundle> element that
     * defines Room Bundles and additional types of rooms for the property.
     * The <Result> element can also be used to remove itineraries from
     * inventory.
     *
     * @var Result[]
     */
    public $Result = [];

    public function __construct(
        string $id = null,
        string $timestamp = null,
        string $partner = null,
        PropertyDataSet $PropertyDataSet = null,
        array $Result = null
    ) {
        $this->id = $id;
        $this->timestamp = $timestamp;
        $this->partner = $partner;
        $this->PropertyDataSet = $PropertyDataSet;
        $this->Result = $Result;
    }
}
