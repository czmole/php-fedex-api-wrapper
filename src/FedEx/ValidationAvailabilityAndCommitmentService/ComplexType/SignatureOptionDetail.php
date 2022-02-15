<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SignatureOptionDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SignatureOptionType|string $OptionType
 * @property string $SignatureReleaseNumber

 */
class SignatureOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SignatureOptionDetail';

    /**
     * Set OptionType
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SignatureOptionType|string $optionType
     * @return $this
     */
    public function setOptionType($optionType)
    {
        $this->values['OptionType'] = $optionType;
        return $this;
    }

    /**
     * Set SignatureReleaseNumber
     *
     * @param string $signatureReleaseNumber
     * @return $this
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber)
    {
        $this->values['SignatureReleaseNumber'] = $signatureReleaseNumber;
        return $this;
    }
}
