<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * LiabilityCoverageType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class LiabilityCoverageType extends AbstractSimpleType
{
    const _NEW = 'NEW';
    const _USED_OR_RECONDITIONED = 'USED_OR_RECONDITIONED';
}
