<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateDiscountType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class RateDiscountType extends AbstractSimpleType
{
    const _BONUS = 'BONUS';
    const _COUPON = 'COUPON';
    const _EARNED = 'EARNED';
    const _INCENTIVE = 'INCENTIVE';
    const _OTHER = 'OTHER';
    const _VOLUME = 'VOLUME';
}
