<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingId
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\TrackingIdType|string $TrackingIdType
 * @property string $FormId
 * @property string $UspsApplicationId
 * @property string $TrackingNumber

 */
class TrackingId extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackingId';

    /**
     * Set TrackingIdType
     *
     * @param \FedEx\ShipService\SimpleType\TrackingIdType|string $trackingIdType
     * @return $this
     */
    public function setTrackingIdType($trackingIdType)
    {
        $this->values['TrackingIdType'] = $trackingIdType;
        return $this;
    }

    /**
     * Set FormId
     *
     * @param string $formId
     * @return $this
     */
    public function setFormId($formId)
    {
        $this->values['FormId'] = $formId;
        return $this;
    }

    /**
     * For use with SmartPost tracking IDs only
     *
     * @param string $uspsApplicationId
     * @return $this
     */
    public function setUspsApplicationId($uspsApplicationId)
    {
        $this->values['UspsApplicationId'] = $uspsApplicationId;
        return $this;
    }

    /**
     * Set TrackingNumber
     *
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['TrackingNumber'] = $trackingNumber;
        return $this;
    }
}
