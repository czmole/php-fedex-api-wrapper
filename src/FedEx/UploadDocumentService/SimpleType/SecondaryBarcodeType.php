<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SecondaryBarcodeType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class SecondaryBarcodeType extends AbstractSimpleType
{
    const _COMMON_2D = 'COMMON_2D';
    const _NONE = 'NONE';
    const _SSCC_18 = 'SSCC_18';
    const _USPS = 'USPS';
}
