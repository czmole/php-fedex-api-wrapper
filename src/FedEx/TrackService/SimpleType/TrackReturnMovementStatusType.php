<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackReturnMovementStatusType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackReturnMovementStatusType extends AbstractSimpleType
{
    const _MOVEMENT_OCCURRED = 'MOVEMENT_OCCURRED';
    const _NO_MOVEMENT = 'NO_MOVEMENT';
}
