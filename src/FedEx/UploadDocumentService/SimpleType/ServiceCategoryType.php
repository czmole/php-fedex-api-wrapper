<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ServiceCategoryType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ServiceCategoryType extends AbstractSimpleType
{
    const _EXPRESS_FREIGHT = 'EXPRESS_FREIGHT';
    const _EXPRESS_PARCEL = 'EXPRESS_PARCEL';
    const _GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';
}
