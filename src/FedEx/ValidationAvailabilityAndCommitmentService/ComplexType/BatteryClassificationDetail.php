<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Describes attributes of a battery or cell that are used for classification purposes. Typically this structure would be used to allow customers to declare batteries or cells for which full dangerous goods documentation and procedures are not required.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BatteryMaterialType|string $Material
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BatteryPackingType|string $Packing
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BatteryRegulatorySubType|string $RegulatorySubType

 */
class BatteryClassificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'BatteryClassificationDetail';

    /**
     * Describes the material composition of the battery or cell.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BatteryMaterialType|string $material
     * @return $this
     */
    public function setMaterial($material)
    {
        $this->values['Material'] = $material;
        return $this;
    }

    /**
     * Describes the packing arrangement of the battery or cell with respect to other items within the same package.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BatteryPackingType|string $packing
     * @return $this
     */
    public function setPacking($packing)
    {
        $this->values['Packing'] = $packing;
        return $this;
    }

    /**
     * A regulation specific classification for the battery or cell.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\BatteryRegulatorySubType|string $regulatorySubType
     * @return $this
     */
    public function setRegulatorySubType($regulatorySubType)
    {
        $this->values['RegulatorySubType'] = $regulatorySubType;
        return $this;
    }
}
