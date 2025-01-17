<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LicenseOrPermitDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property string $Number
 * @property string $EffectiveDate
 * @property string $ExpirationDate

 */
class LicenseOrPermitDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LicenseOrPermitDetail';

    /**
     * License or Permit Number.
     *
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['Number'] = $number;
        return $this;
    }

    /**
     * Specifies the effective date of the license.
     *
     * @param string $effectiveDate
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->values['EffectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
     * Specifies the expiration date of the license.
     *
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->values['ExpirationDate'] = $expirationDate;
        return $this;
    }
}
