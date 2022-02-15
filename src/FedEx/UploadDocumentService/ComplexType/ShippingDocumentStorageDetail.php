<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how to store shipping documents.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\ShippingDocumentStorageDetailType|string $Type
 * @property string $FilePath
 * @property \FedEx\UploadDocumentService\SimpleType\ShippingDocumentNamingType|string $FileNaming
 * @property string $FileSuffix

 */
class ShippingDocumentStorageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShippingDocumentStorageDetail';

    /**
     * Indicates the mechanism by which a shipping document will be stored for later retrieval.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\ShippingDocumentStorageDetailType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Provides the path to be used for STORED or DEFERRED documents.
     *
     * @param string $filePath
     * @return $this
     */
    public function setFilePath($filePath)
    {
        $this->values['FilePath'] = $filePath;
        return $this;
    }

    /**
     * Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\ShippingDocumentNamingType|string $fileNaming
     * @return $this
     */
    public function setFileNaming($fileNaming)
    {
        $this->values['FileNaming'] = $fileNaming;
        return $this;
    }

    /**
     * Suffix to be placed at the end of the file name; required on some platforms to determine file type.
     *
     * @param string $fileSuffix
     * @return $this
     */
    public function setFileSuffix($fileSuffix)
    {
        $this->values['FileSuffix'] = $fileSuffix;
        return $this;
    }
}
