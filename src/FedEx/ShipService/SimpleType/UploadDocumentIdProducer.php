<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the application that is responsible for managing the document id.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class UploadDocumentIdProducer extends AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _FEDEX_CAFE = 'FEDEX_CAFE';
    const _FEDEX_CSHP = 'FEDEX_CSHP';
    const _FEDEX_FXRS = 'FEDEX_FXRS';
    const _FEDEX_GSMW = 'FEDEX_GSMW';
    const _FEDEX_GTM = 'FEDEX_GTM';
    const _FEDEX_INET = 'FEDEX_INET';
}
