<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EmailOptionType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class EmailOptionType extends AbstractSimpleType
{
    const _PRODUCE_PAPERLESS_SHIPPING_FORMAT = 'PRODUCE_PAPERLESS_SHIPPING_FORMAT';
    const _SUPPRESS_ACCESS_EMAILS = 'SUPPRESS_ACCESS_EMAILS';
    const _SUPPRESS_ADDITIONAL_LANGUAGES = 'SUPPRESS_ADDITIONAL_LANGUAGES';
}
