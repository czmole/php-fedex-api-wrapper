<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of license that the recipient of the alcohol shipment has.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class AlcoholRecipientType extends AbstractSimpleType
{
    const _CONSUMER = 'CONSUMER';
    const _LICENSEE = 'LICENSEE';
}
