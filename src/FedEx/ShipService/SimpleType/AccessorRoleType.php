<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the role that identifies the permissions the accessor of the pending shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class AccessorRoleType extends AbstractSimpleType
{
    const _SHIPMENT_COMPLETOR = 'SHIPMENT_COMPLETOR';
    const _SHIPMENT_INITIATOR = 'SHIPMENT_INITIATOR';
}
