<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EdtExciseCondition
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Category
 * @property string $Value

 */
class EdtExciseCondition extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EdtExciseCondition';

    /**
     * Set Category
     *
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->values['Category'] = $category;
        return $this;
    }

    /**
     * Customer-declared value, with data type and legal values depending on excise condition, used in defining the taxable value of the item.
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
