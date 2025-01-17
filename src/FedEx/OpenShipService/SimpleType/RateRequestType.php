<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateRequestType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class RateRequestType extends AbstractSimpleType
{
    const _LIST = 'LIST';
    const _NONE = 'NONE';
    const _PREFERRED = 'PREFERRED';
}
