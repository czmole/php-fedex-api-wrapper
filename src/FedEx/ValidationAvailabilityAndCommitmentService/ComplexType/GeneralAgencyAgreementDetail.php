<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a General Agency Agreement document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property ShippingDocumentFormat $Format

 */
class GeneralAgencyAgreementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'GeneralAgencyAgreementDetail';

    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * @return $this
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->values['Format'] = $format;
        return $this;
    }
}
