<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This provides the information necessary to identify the different statements, declarations, acts, and/or certifications that apply to this shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\CustomsDeclarationStatementType|string[] $Types

 */
class CustomsDeclarationStatementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomsDeclarationStatementDetail';

    /**
     * This indicates the different statements, declarations, acts, and/or certifications that apply to this shipment.
     *
     * @param \FedEx\OpenShipService\SimpleType\CustomsDeclarationStatementType[]|string[] $types
     * @return $this
     */
    public function setTypes(array $types)
    {
        $this->values['Types'] = $types;
        return $this;
    }
}
