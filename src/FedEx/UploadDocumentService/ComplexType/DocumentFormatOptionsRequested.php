<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocumentFormatOptionsRequested
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\DocumentFormatOptionType|string[] $Options

 */
class DocumentFormatOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DocumentFormatOptionsRequested';

    /**
     * Set Options
     *
     * @param \FedEx\UploadDocumentService\SimpleType\DocumentFormatOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }
}
