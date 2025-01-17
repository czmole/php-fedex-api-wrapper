<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * UpdatePickupRequestProcessingOptionType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class UpdatePickupRequestProcessingOptionType extends AbstractSimpleType
{
    const _OVERRIDE_CUTOFF = 'OVERRIDE_CUTOFF';
    const _REACTIVATE_CANCELLED_PICKUP = 'REACTIVATE_CANCELLED_PICKUP';
}
