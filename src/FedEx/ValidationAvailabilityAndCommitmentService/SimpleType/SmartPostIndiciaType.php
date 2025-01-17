<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SmartPostIndiciaType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class SmartPostIndiciaType extends AbstractSimpleType
{
    const _MEDIA_MAIL = 'MEDIA_MAIL';
    const _PARCEL_RETURN = 'PARCEL_RETURN';
    const _PARCEL_SELECT = 'PARCEL_SELECT';
    const _PRESORTED_BOUND_PRINTED_MATTER = 'PRESORTED_BOUND_PRINTED_MATTER';
    const _PRESORTED_STANDARD = 'PRESORTED_STANDARD';
}
