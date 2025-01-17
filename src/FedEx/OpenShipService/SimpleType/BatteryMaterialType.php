<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Describes the material composition of a battery or cell.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class BatteryMaterialType extends AbstractSimpleType
{
    const _LITHIUM_ION = 'LITHIUM_ION';
    const _LITHIUM_METAL = 'LITHIUM_METAL';
}
