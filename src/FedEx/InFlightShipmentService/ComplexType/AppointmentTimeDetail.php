<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about the appointment time window.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property \FedEx\InFlightShipmentService\SimpleType\AppointmentWindowType|string $Type
 * @property LocalTimeRange $Window
 * @property string $Description

 */
class AppointmentTimeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AppointmentTimeDetail';

    /**
     * The description that FedEx Ground uses for the appointment window being specified.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\AppointmentWindowType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Specifies the window of time for an appointment.
     *
     * @param LocalTimeRange $window
     * @return $this
     */
    public function setWindow(LocalTimeRange $window)
    {
        $this->values['Window'] = $window;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }
}
