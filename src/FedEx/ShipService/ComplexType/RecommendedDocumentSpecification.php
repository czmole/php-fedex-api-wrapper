<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about documents that are recommended to be included with the shipment for ease of shipment processing and transportation.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\RecommendedDocumentType|string[] $Types

 */
class RecommendedDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RecommendedDocumentSpecification';

    /**
     * Set Types
     *
     * @param \FedEx\ShipService\SimpleType\RecommendedDocumentType[]|string[] $types
     * @return $this
     */
    public function setTypes(array $types)
    {
        $this->values['Types'] = $types;
        return $this;
    }
}
