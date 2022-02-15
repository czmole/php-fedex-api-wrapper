<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Describes the rotation of an item from its default orientation.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RotationType extends AbstractSimpleType
{
    const _LEFT = 'LEFT';
    const _NONE = 'NONE';
    const _RIGHT = 'RIGHT';
    const _UPSIDE_DOWN = 'UPSIDE_DOWN';
}
