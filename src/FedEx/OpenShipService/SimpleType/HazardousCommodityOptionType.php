<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates which kind of hazardous content is being reported.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class HazardousCommodityOptionType extends AbstractSimpleType
{
    const _BATTERY = 'BATTERY';
    const _HAZARDOUS_MATERIALS = 'HAZARDOUS_MATERIALS';
    const _LIMITED_QUANTITIES_COMMODITIES = 'LIMITED_QUANTITIES_COMMODITIES';
    const _ORM_D = 'ORM_D';
    const _REPORTABLE_QUANTITIES = 'REPORTABLE_QUANTITIES';
    const _SMALL_QUANTITY_EXCEPTION = 'SMALL_QUANTITY_EXCEPTION';
}
