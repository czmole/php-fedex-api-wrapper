<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates the status of a package inspection performed by an agent.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class InspectionStatusType extends AbstractSimpleType
{
    const _CUSTOMER_REFUSED_INSPECTION = 'CUSTOMER_REFUSED_INSPECTION';
    const _INSPECTED = 'INSPECTED';
    const _NOT_INSPECTED = 'NOT_INSPECTED';
}
