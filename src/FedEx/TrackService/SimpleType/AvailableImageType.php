<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AvailableImageType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class AvailableImageType extends AbstractSimpleType
{
    const _BILL_OF_LADING = 'BILL_OF_LADING';
    const _SIGNATURE_PROOF_OF_DELIVERY = 'SIGNATURE_PROOF_OF_DELIVERY';
}
