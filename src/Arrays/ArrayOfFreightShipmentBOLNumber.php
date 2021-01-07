<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentBOLNumber Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentBOLNumber extends AbstractStructArrayBase
{
    /**
     * The freightShipmentBOLNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $freightShipmentBOLNumber;
    /**
     * Constructor method for ArrayOfFreightShipmentBOLNumber
     * @uses ArrayOfFreightShipmentBOLNumber::setFreightShipmentBOLNumber()
     * @param string[] $freightShipmentBOLNumber
     */
    public function __construct(array $freightShipmentBOLNumber = array())
    {
        $this
            ->setFreightShipmentBOLNumber($freightShipmentBOLNumber);
    }
    /**
     * Get freightShipmentBOLNumber value
     * @return string[]|null
     */
    public function getFreightShipmentBOLNumber()
    {
        return $this->freightShipmentBOLNumber;
    }
    /**
     * Set freightShipmentBOLNumber value
     * @throws \InvalidArgumentException
     * @param string[] $freightShipmentBOLNumber
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLNumber
     */
    public function setFreightShipmentBOLNumber(array $freightShipmentBOLNumber = array())
    {
        foreach ($freightShipmentBOLNumber as $arrayOfFreightShipmentBOLNumberFreightShipmentBOLNumberItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfFreightShipmentBOLNumberFreightShipmentBOLNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentBOLNumber property can only contain items of string, "%s" given', is_object($arrayOfFreightShipmentBOLNumberFreightShipmentBOLNumberItem) ? get_class($arrayOfFreightShipmentBOLNumberFreightShipmentBOLNumberItem) : gettype($arrayOfFreightShipmentBOLNumberFreightShipmentBOLNumberItem)), __LINE__);
            }
        }
        $this->freightShipmentBOLNumber = $freightShipmentBOLNumber;
        return $this;
    }
    /**
     * Add item to freightShipmentBOLNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLNumber
     */
    public function addToFreightShipmentBOLNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentBOLNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentBOLNumber[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentBOLNumber
     */
    public function getAttributeName()
    {
        return 'freightShipmentBOLNumber';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLNumber
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
