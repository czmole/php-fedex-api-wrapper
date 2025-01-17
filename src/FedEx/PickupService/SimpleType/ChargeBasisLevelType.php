<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ChargeBasisLevelType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ChargeBasisLevelType extends AbstractSimpleType
{
    const _CURRENT_PACKAGE = 'CURRENT_PACKAGE';
    const _SUM_OF_PACKAGES = 'SUM_OF_PACKAGES';
}
