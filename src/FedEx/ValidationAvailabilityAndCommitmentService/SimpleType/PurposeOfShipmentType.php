<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PurposeOfShipmentType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class PurposeOfShipmentType extends AbstractSimpleType
{
    const _GIFT = 'GIFT';
    const _NOT_SOLD = 'NOT_SOLD';
    const _PERSONAL_EFFECTS = 'PERSONAL_EFFECTS';
    const _REPAIR_AND_RETURN = 'REPAIR_AND_RETURN';
    const _SAMPLE = 'SAMPLE';
    const _SOLD = 'SOLD';
}
