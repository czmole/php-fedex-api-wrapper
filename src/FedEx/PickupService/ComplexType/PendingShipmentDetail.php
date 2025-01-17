<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes the kind of pending shipment being requested.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\PendingShipmentType|string $Type
 * @property string $ExpirationDate
 * @property EMailLabelDetail $EmailLabelDetail
 * @property RecommendedDocumentSpecification $RecommendedDocumentSpecification
 * @property UploadDocumentReferenceDetail[] $DocumentReferences

 */
class PendingShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PendingShipmentDetail';

    /**
     * Set Type
     *
     * @param \FedEx\PickupService\SimpleType\PendingShipmentType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Date after which the pending shipment will no longer be available for completion.
     *
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->values['ExpirationDate'] = $expirationDate;
        return $this;
    }

    /**
     * Only used with type of EMAIL.
     *
     * @param EMailLabelDetail $emailLabelDetail
     * @return $this
     */
    public function setEmailLabelDetail(EMailLabelDetail $emailLabelDetail)
    {
        $this->values['EmailLabelDetail'] = $emailLabelDetail;
        return $this;
    }

    /**
     * These are documents that are recommended to be included with the shipment.
     *
     * @param RecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return $this
     */
    public function setRecommendedDocumentSpecification(RecommendedDocumentSpecification $recommendedDocumentSpecification)
    {
        $this->values['RecommendedDocumentSpecification'] = $recommendedDocumentSpecification;
        return $this;
    }

    /**
     * Upload document details provided by the initator of the shipment.
     *
     * @param UploadDocumentReferenceDetail[] $documentReferences
     * @return $this
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->values['DocumentReferences'] = $documentReferences;
        return $this;
    }
}
