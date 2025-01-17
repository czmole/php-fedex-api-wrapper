<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Dimensions
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property int $Length
 * @property int $Width
 * @property int $Height
 * @property \FedEx\LocationsService\SimpleType\LinearUnits|string $Units

 */
class Dimensions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Dimensions';

    /**
     * Set Length
     *
     * @param int $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->values['Length'] = $length;
        return $this;
    }

    /**
     * Set Width
     *
     * @param int $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->values['Width'] = $width;
        return $this;
    }

    /**
     * Set Height
     *
     * @param int $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->values['Height'] = $height;
        return $this;
    }

    /**
     * Set Units
     *
     * @param \FedEx\LocationsService\SimpleType\LinearUnits|string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }
}
