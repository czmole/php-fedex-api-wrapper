<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DayOfWeekType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class DayOfWeekType extends AbstractSimpleType
{
    const _FRI = 'FRI';
    const _MON = 'MON';
    const _SAT = 'SAT';
    const _SUN = 'SUN';
    const _THU = 'THU';
    const _TUE = 'TUE';
    const _WED = 'WED';
}
