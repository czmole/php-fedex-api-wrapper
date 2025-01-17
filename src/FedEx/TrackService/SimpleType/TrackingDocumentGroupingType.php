<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackingDocumentGroupingType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackingDocumentGroupingType extends AbstractSimpleType
{
    const _CONSOLIDATED_BY_DOCUMENT_TYPE = 'CONSOLIDATED_BY_DOCUMENT_TYPE';
    const _INDIVIDUAL = 'INDIVIDUAL';
}
