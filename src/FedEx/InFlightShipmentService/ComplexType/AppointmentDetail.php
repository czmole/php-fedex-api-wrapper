<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the different appointment times on a specific date.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string $Date
 * @property AppointmentTimeDetail[] $WindowDetails

 */
class AppointmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AppointmentDetail';

    /**
     * Set Date
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->values['Date'] = $date;
        return $this;
    }

    /**
     * Different appointment time windows on the date specified.
     *
     * @param AppointmentTimeDetail[] $windowDetails
     * @return $this
     */
    public function setWindowDetails(array $windowDetails)
    {
        $this->values['WindowDetails'] = $windowDetails;
        return $this;
    }
}
