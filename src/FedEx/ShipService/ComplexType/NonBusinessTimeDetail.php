<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for services performed during non-business hours and/or days.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property int $PersonDays
 * @property int $PersonHours

 */
class NonBusinessTimeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NonBusinessTimeDetail';

    /**
     * Total number of person days for full non-business days.
     *
     * @param int $personDays
     * @return $this
     */
    public function setPersonDays($personDays)
    {
        $this->values['PersonDays'] = $personDays;
        return $this;
    }

    /**
     * Total number of person hours (whole or partial hours) for non-business hours.
     *
     * @param int $personHours
     * @return $this
     */
    public function setPersonHours($personHours)
    {
        $this->values['PersonHours'] = $personHours;
        return $this;
    }
}
