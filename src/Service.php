<?php

declare(strict_types=1);

namespace Bahiazul\Xml\GoogleHotelAds;

use Bahiazul\Xml\GoogleHotelAds;

class Service extends \Sabre\Xml\Service
{
    const GHA_NS = '';
    const GHA_DEFAULT_PREFIX = '';

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->namespaceMap[self::GHA_NS] = self::GHA_DEFAULT_PREFIX;

        $ns = '{' . self::GHA_NS . '}';

        // The following elements are all simple xml elements, and we can use
        // the VO system for mapping from PHP object to XML element.
        $this->mapValueObject($ns . 'Context', Element\Context::class);
        $this->mapValueObject($ns . 'Hint', Element\Hint::class);
        $this->mapValueObject($ns . 'Item', Element\Item::class);
        $this->mapValueObject(
            $ns . 'MembershipBenefitsIncluded',
            Element\MembershipBenefitsIncluded::class
        );
        $this->mapValueObject(
            $ns . 'MilesIncluded',
            Element\MilesIncluded::class
        );
        $this->mapValueObject(
            $ns . 'OccupancyDetails',
            Element\OccupancyDetails::class
        );
        $this->mapValueObject(
            $ns . 'OnPropertyCredit',
            Element\OnPropertyCredit::class
        );
        $this->mapValueObject($ns . 'PackageData', Element\PackageData::class);
        $this->mapValueObject($ns . 'PhotoURL', Element\PhotoURL::class);
        $this->mapValueObject(
            $ns . 'PropertyDataSet',
            Element\PropertyDataSet::class
        );
        $this->mapValueObject($ns . 'Result', Element\Result::class);
        $this->mapValueObject($ns . 'Query', Element\Query::class);
        $this->mapValueObject($ns . 'HintRequest', Element\HintRequest::class);
        $this->mapValueObject($ns . 'RoomBundle', Element\RoomBundle::class);
        $this->mapValueObject($ns . 'RoomData', Element\RoomData::class);
        $this->mapValueObject($ns . 'Stay', Element\Stay::class);
        $this->mapValueObject(
            $ns . 'StaysIncludingRange',
            Element\StaysIncludingRange::class
        );

        // The following elements need custom (de-)serializers

        // This serializer takes an object and encodes all its properties as
        // XML attributes.
        $attributeWriter = function ($writer, $object) {
            $attributes = get_object_vars($object);

            if (isset($attributes['value']) && !is_null($attributes['value'])) {
                $writer->write($attributes['value']);
                unset($attributes['value']);
            }

            // remove properties with a null value from the list.
            $attributes = array_filter($attributes, function ($item) {
                return null !== $item;
            });

            $writer->writeAttributes($attributes);
        };

        // This deserializer takes all attributes from an xml element and
        // turns the into properties of a class.
        $attributeReader = function ($reader, $class) {
            $attributes = $reader->parseAttributes();
            $object = new $class();
            foreach ($attributes as $key => $value) {
                if (property_exists($object, $key)) {
                    $object->{$key} = $value;
                }
            }

            if (property_exists($object, 'value')) {
                $object->value = $reader->value;
            }

            // Always advance the reader
            $reader->next();

            return $object;
        };

        $propertyListDeserializer = function ($reader) {
            return \Sabre\Xml\Deserializer\repeatingElements(
                $reader,
                $ns . 'Property'
            );
        };

        $this->elementMap[$ns . 'Child'] = function ($reader) use (
            $attributeReader
        ) {
            $attributes = $reader->parseAttributes();
            $value = isset($attributes['age']) ? $attributes['age'] : null;
            $reader->next();
            return $value;
        };
        $this->elementMap[$ns . 'Children'] = function ($reader) {
            return \Sabre\Xml\Deserializer\repeatingElements(
                $reader,
                $ns . 'Child'
            );
        };
        $this->elementMap[
            $ns . 'HotelInfoProperties'
        ] = $propertyListDeserializer;
        $this->elementMap[$ns . 'PropertyList'] = $propertyListDeserializer;
        $this->elementMap[$ns . 'Property'] = function ($reader) {
            $value = $reader->readText();
            $reader->next();
            return $value;
        };

        $this->classMap[Element\Child::class] = $attributeWriter;
        $this->classMap[Element\MonetaryValue::class] = $attributeWriter;
        $this->classMap[Element\PointOfSale::class] = $attributeWriter;
        $this->classMap[Element\Rate::class] = $attributeWriter;
        $this->classMap[Element\Refundable::class] = $attributeWriter;
        $this->classMap[Element\Text::class] = $attributeWriter;
        $this->classMap[Element\Transaction::class] = $attributeWriter;
    }
}
