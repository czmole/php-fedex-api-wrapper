<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the type of funds FedEx should collect upon shipment delivery.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class CodCollectionType extends AbstractSimpleType
{
    const _ANY = 'ANY';
    const _CASH = 'CASH';
    const _COMPANY_CHECK = 'COMPANY_CHECK';
    const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
    const _PERSONAL_CHECK = 'PERSONAL_CHECK';
}
