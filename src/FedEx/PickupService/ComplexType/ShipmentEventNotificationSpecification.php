<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentEventNotificationSpecification
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\ShipmentNotificationRoleType|string $Role
 * @property \FedEx\PickupService\SimpleType\NotificationEventType|string[] $Events
 * @property NotificationDetail $NotificationDetail
 * @property ShipmentNotificationFormatSpecification $FormatSpecification

 */
class ShipmentEventNotificationSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentEventNotificationSpecification';

    /**
     * Set Role
     *
     * @param \FedEx\PickupService\SimpleType\ShipmentNotificationRoleType|string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['Role'] = $role;
        return $this;
    }

    /**
     * Set Events
     *
     * @param \FedEx\PickupService\SimpleType\NotificationEventType[]|string[] $events
     * @return $this
     */
    public function setEvents(array $events)
    {
        $this->values['Events'] = $events;
        return $this;
    }

    /**
     * Set NotificationDetail
     *
     * @param NotificationDetail $notificationDetail
     * @return $this
     */
    public function setNotificationDetail(NotificationDetail $notificationDetail)
    {
        $this->values['NotificationDetail'] = $notificationDetail;
        return $this;
    }

    /**
     * Set FormatSpecification
     *
     * @param ShipmentNotificationFormatSpecification $formatSpecification
     * @return $this
     */
    public function setFormatSpecification(ShipmentNotificationFormatSpecification $formatSpecification)
    {
        $this->values['FormatSpecification'] = $formatSpecification;
        return $this;
    }
}
