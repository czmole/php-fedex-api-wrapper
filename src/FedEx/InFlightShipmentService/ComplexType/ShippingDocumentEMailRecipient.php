<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies an individual recipient of e-mailed shipping document(s).
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property \FedEx\InFlightShipmentService\SimpleType\EMailNotificationRecipientType|string $RecipientType
 * @property string $Address

 */
class ShippingDocumentEMailRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShippingDocumentEMailRecipient';

    /**
     * Identifies the relationship of this recipient in the shipment.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\EMailNotificationRecipientType|string $recipientType
     * @return $this
     */
    public function setRecipientType($recipientType)
    {
        $this->values['RecipientType'] = $recipientType;
        return $this;
    }

    /**
     * Address to which the document is to be sent.
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->values['Address'] = $address;
        return $this;
    }
}
