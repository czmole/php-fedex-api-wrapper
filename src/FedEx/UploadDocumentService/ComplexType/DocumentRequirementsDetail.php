<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocumentRequirementsDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\RequiredDocumentType|string[] $RequiredDocuments
 * @property DocumentGenerationDetail[] $GenerationDetails
 * @property \FedEx\UploadDocumentService\SimpleType\EnterpriseDocumentType|string[] $ProhibitedDocuments

 */
class DocumentRequirementsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DocumentRequirementsDetail';

    /**
     * Set RequiredDocuments
     *
     * @param \FedEx\UploadDocumentService\SimpleType\RequiredDocumentType[]|string[] $requiredDocuments
     * @return $this
     */
    public function setRequiredDocuments(array $requiredDocuments)
    {
        $this->values['RequiredDocuments'] = $requiredDocuments;
        return $this;
    }

    /**
     * Set GenerationDetails
     *
     * @param DocumentGenerationDetail[] $generationDetails
     * @return $this
     */
    public function setGenerationDetails(array $generationDetails)
    {
        $this->values['GenerationDetails'] = $generationDetails;
        return $this;
    }

    /**
     * Lists the documents that are not accepted by FedEx for this shipment.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\EnterpriseDocumentType[]|string[] $prohibitedDocuments
     * @return $this
     */
    public function setProhibitedDocuments(array $prohibitedDocuments)
    {
        $this->values['ProhibitedDocuments'] = $prohibitedDocuments;
        return $this;
    }
}
