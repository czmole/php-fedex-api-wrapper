<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates a FedEx Express operating region.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ExpressRegionCode extends AbstractSimpleType
{
    const _APAC = 'APAC';
    const _CA = 'CA';
    const _EMEA = 'EMEA';
    const _LAC = 'LAC';
    const _US = 'US';
}
