<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for labor time spent handling shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $Duration

 */
class ExtraLaborDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExtraLaborDetail';

    /**
     * Total labor time.
     *
     * @param string $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->values['Duration'] = $duration;
        return $this;
    }
}
