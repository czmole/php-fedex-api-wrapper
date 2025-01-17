<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class NotificationType extends AbstractSimpleType
{
    const _EMAIL = 'EMAIL';
    const _FAX = 'FAX';
    const _SMS_TEXT_MESSAGE = 'SMS_TEXT_MESSAGE';
}
