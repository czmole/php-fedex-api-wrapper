<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * MinimumChargeType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class MinimumChargeType extends AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _CUSTOMER_FREIGHT_WEIGHT = 'CUSTOMER_FREIGHT_WEIGHT';
    const _EARNED_DISCOUNT = 'EARNED_DISCOUNT';
    const _MIXED = 'MIXED';
    const _RATE_SCALE = 'RATE_SCALE';
}
