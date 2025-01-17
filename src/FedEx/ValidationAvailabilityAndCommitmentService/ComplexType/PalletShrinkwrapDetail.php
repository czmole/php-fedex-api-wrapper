<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property int $PalletCount

 */
class PalletShrinkwrapDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PalletShrinkwrapDetail';

    /**
     * Number of pallets to be shrinkwrapped.
     *
     * @param int $palletCount
     * @return $this
     */
    public function setPalletCount($palletCount)
    {
        $this->values['PalletCount'] = $palletCount;
        return $this;
    }
}
