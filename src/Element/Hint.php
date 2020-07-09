<?php

namespace Bahiazul\Xml\GoogleHotelAds\Element;

/**
 * The root element of a Hint Response message. Hint Response messages specify
 * which hotel/itinerary combinations should be repriced. They are your response
 * to a Hint Request message from Google.
 *
 * A Hint Response message should specify only those hotels whose prices have
 * changed since the last time Google received a successful Hint Response from
 * your servers.
 *
 * NOTE: If you do not implement Hint Response messages, Google's Query messages
 * request data for all properties identified in your Hotel List Feed.
 *
 * Hint Response messages use one of the following methods to specify which
 * hotels and itineraries Google should reprice:
 *
 * * Exact itineraries: A combination of check-in date and length of stay.
 * * Check-in date ranges: Specifies a range of check-in dates, beginning with
 *   the first check-in date and ending with the last check-in date.
 * * Ranged stays (or ranged itineraries)
 *
 * Each of these methods requires a different syntax for the Hint Response
 * message.
 *
 * For more information, consult Hint Response Messages.
 *
 * @author Javier Zapata <javierzapata82@gmail.com> (https://javi.io/)
 * @license MIT
 * @copyright Copyright (C) Centronor Siglo XXI (https://bahiazul.com/)
 */
class Hint
{
    /**
     * A container for the hotel/itinerary to be updated.
     *
     * @var Item[]
     */
    public $Item = [];
}
