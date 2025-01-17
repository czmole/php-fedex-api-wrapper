<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indication of cash-only account standing.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomerCashType extends AbstractSimpleType
{
    const _BAD = 'BAD';
    const _GOOD = 'GOOD';
}
