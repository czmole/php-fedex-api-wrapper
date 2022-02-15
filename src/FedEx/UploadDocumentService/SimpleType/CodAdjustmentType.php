<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of adjustment was performed to the COD collection amount during rating.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class CodAdjustmentType extends AbstractSimpleType
{
    const _CHARGES_ADDED = 'CHARGES_ADDED';
    const _NONE = 'NONE';
}
