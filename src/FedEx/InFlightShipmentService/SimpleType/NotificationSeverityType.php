<?php
namespace FedEx\InFlightShipmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * NotificationSeverityType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 */
class NotificationSeverityType extends AbstractSimpleType
{
    const _ERROR = 'ERROR';
    const _FAILURE = 'FAILURE';
    const _NOTE = 'NOTE';
    const _SUCCESS = 'SUCCESS';
    const _WARNING = 'WARNING';
}
