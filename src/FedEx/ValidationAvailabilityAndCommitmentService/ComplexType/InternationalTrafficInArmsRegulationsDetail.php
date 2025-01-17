<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * InternationalTrafficInArmsRegulationsDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $LicenseOrExemptionNumber

 */
class InternationalTrafficInArmsRegulationsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InternationalTrafficInArmsRegulationsDetail';

    /**
     * Set LicenseOrExemptionNumber
     *
     * @param string $licenseOrExemptionNumber
     * @return $this
     */
    public function setLicenseOrExemptionNumber($licenseOrExemptionNumber)
    {
        $this->values['LicenseOrExemptionNumber'] = $licenseOrExemptionNumber;
        return $this;
    }
}
