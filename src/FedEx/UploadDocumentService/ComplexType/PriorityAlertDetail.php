<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PriorityAlertDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\PriorityAlertEnhancementType|string[] $EnhancementTypes
 * @property string[] $Content

 */
class PriorityAlertDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PriorityAlertDetail';

    /**
     * Set EnhancementTypes
     *
     * @param \FedEx\UploadDocumentService\SimpleType\PriorityAlertEnhancementType[]|string[] $enhancementTypes
     * @return $this
     */
    public function setEnhancementTypes(array $enhancementTypes)
    {
        $this->values['EnhancementTypes'] = $enhancementTypes;
        return $this;
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->values['Content'] = $content;
        return $this;
    }
}
