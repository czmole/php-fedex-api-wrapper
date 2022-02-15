<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Payor
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property Party $ResponsibleParty
 * @property AssociatedAccount[] $AssociatedAccounts

 */
class Payor extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Payor';

    /**
     * Set ResponsibleParty
     *
     * @param Party $responsibleParty
     * @return $this
     */
    public function setResponsibleParty(Party $responsibleParty)
    {
        $this->values['ResponsibleParty'] = $responsibleParty;
        return $this;
    }

    /**
     * Set AssociatedAccounts
     *
     * @param AssociatedAccount[] $associatedAccounts
     * @return $this
     */
    public function setAssociatedAccounts(array $associatedAccounts)
    {
        $this->values['AssociatedAccounts'] = $associatedAccounts;
        return $this;
    }
}
