<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabContentZone001
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property DocTabZoneSpecification[] $DocTabZoneSpecifications

 */
class DocTabContentZone001 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DocTabContentZone001';

    /**
     * Set DocTabZoneSpecifications
     *
     * @param DocTabZoneSpecification[] $docTabZoneSpecifications
     * @return $this
     */
    public function setDocTabZoneSpecifications(array $docTabZoneSpecifications)
    {
        $this->values['DocTabZoneSpecifications'] = $docTabZoneSpecifications;
        return $this;
    }
}
