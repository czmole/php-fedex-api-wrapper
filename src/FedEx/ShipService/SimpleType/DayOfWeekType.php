<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DayOfWeekType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
