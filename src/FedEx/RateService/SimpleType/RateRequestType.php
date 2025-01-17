<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateRequestType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RateRequestType extends AbstractSimpleType
{
    const _LIST = 'LIST';
    const _NONE = 'NONE';
    const _PREFERRED = 'PREFERRED';
}
