<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Represents features of FedEx Ground delivery for which the shipment is eligible.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class GroundDeliveryEligibilityType extends AbstractSimpleType
{
    const _ALTERNATE_DAY_SERVICE = 'ALTERNATE_DAY_SERVICE';
    const _CARTAGE_AGENT_DELIVERY = 'CARTAGE_AGENT_DELIVERY';
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _USPS_DELIVERY = 'USPS_DELIVERY';
}
