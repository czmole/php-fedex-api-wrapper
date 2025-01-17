<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class NotificationType extends AbstractSimpleType
{
    const _EMAIL = 'EMAIL';
    const _FAX = 'FAX';
    const _SMS_TEXT_MESSAGE = 'SMS_TEXT_MESSAGE';
}
