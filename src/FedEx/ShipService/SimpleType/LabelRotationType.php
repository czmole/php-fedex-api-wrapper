<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Relative to normal orientation for the printer.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LabelRotationType extends AbstractSimpleType
{
    const _LEFT = 'LEFT';
    const _NONE = 'NONE';
    const _RIGHT = 'RIGHT';
    const _UPSIDE_DOWN = 'UPSIDE_DOWN';
}
