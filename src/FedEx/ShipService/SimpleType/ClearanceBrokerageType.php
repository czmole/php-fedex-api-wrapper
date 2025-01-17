<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of brokerage to be applied to a shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ClearanceBrokerageType extends AbstractSimpleType
{
    const _BROKER_INCLUSIVE = 'BROKER_INCLUSIVE';
    const _BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER = 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER';
    const _BROKER_SELECT = 'BROKER_SELECT';
    const _BROKER_SELECT_NON_RESIDENT_IMPORTER = 'BROKER_SELECT_NON_RESIDENT_IMPORTER';
    const _BROKER_UNASSIGNED = 'BROKER_UNASSIGNED';
}
