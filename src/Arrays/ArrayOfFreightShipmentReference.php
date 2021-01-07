<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentReference Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentReference extends AbstractStructArrayBase
{
    /**
     * The freightShipmentReference
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference[]
     */
    public $freightShipmentReference;
    /**
     * Constructor method for ArrayOfFreightShipmentReference
     * @uses ArrayOfFreightShipmentReference::setFreightShipmentReference()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference[] $freightShipmentReference
     */
    public function __construct(array $freightShipmentReference = array())
    {
        $this
            ->setFreightShipmentReference($freightShipmentReference);
    }
    /**
     * Get freightShipmentReference value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference[]|null
     */
    public function getFreightShipmentReference()
    {
        return $this->freightShipmentReference;
    }
    /**
     * Set freightShipmentReference value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference[] $freightShipmentReference
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentReference
     */
    public function setFreightShipmentReference(array $freightShipmentReference = array())
    {
        foreach ($freightShipmentReference as $arrayOfFreightShipmentReferenceFreightShipmentReferenceItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreightShipmentReferenceFreightShipmentReferenceItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentReference property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference, "%s" given', is_object($arrayOfFreightShipmentReferenceFreightShipmentReferenceItem) ? get_class($arrayOfFreightShipmentReferenceFreightShipmentReferenceItem) : gettype($arrayOfFreightShipmentReferenceFreightShipmentReferenceItem)), __LINE__);
            }
        }
        $this->freightShipmentReference = $freightShipmentReference;
        return $this;
    }
    /**
     * Add item to freightShipmentReference value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentReference
     */
    public function addToFreightShipmentReference(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentReference property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentReference[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentReference
     */
    public function getAttributeName()
    {
        return 'freightShipmentReference';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentReference
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
