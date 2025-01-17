<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details around the ADR license required for shipping.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property LicenseOrPermitDetail $LicenseOrPermitDetail

 */
class AdrLicenseDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AdrLicenseDetail';

    /**
     * Set LicenseOrPermitDetail
     *
     * @param LicenseOrPermitDetail $licenseOrPermitDetail
     * @return $this
     */
    public function setLicenseOrPermitDetail(LicenseOrPermitDetail $licenseOrPermitDetail)
    {
        $this->values['LicenseOrPermitDetail'] = $licenseOrPermitDetail;
        return $this;
    }
}
