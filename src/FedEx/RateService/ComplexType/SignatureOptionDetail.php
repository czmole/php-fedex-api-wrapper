<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SignatureOptionDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\SignatureOptionType|string $OptionType
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
     * @param \FedEx\RateService\SimpleType\SignatureOptionType|string $optionType
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
