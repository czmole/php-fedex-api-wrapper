<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TinType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class TinType extends AbstractSimpleType
{
    const _BUSINESS_NATIONAL = 'BUSINESS_NATIONAL';
    const _BUSINESS_STATE = 'BUSINESS_STATE';
    const _BUSINESS_UNION = 'BUSINESS_UNION';
    const _PERSONAL_NATIONAL = 'PERSONAL_NATIONAL';
    const _PERSONAL_STATE = 'PERSONAL_STATE';
}
