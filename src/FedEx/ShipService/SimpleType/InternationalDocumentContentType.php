<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * InternationalDocumentContentType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class InternationalDocumentContentType extends AbstractSimpleType
{
    const _DERIVED = 'DERIVED';
    const _DOCUMENTS_ONLY = 'DOCUMENTS_ONLY';
    const _NON_DOCUMENTS = 'NON_DOCUMENTS';
}
