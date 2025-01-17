<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipmentNotificationRoleType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ShipmentNotificationRoleType extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _OTHER = 'OTHER';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
}
