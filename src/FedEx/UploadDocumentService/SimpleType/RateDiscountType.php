<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateDiscountType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
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
