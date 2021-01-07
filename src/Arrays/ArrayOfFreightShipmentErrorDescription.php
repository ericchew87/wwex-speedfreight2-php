<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentErrorDescription Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentErrorDescription extends AbstractStructArrayBase
{
    /**
     * The freightShipmentErrorDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription[]
     */
    public $freightShipmentErrorDescription;
    /**
     * Constructor method for ArrayOfFreightShipmentErrorDescription
     * @uses ArrayOfFreightShipmentErrorDescription::setFreightShipmentErrorDescription()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription[] $freightShipmentErrorDescription
     */
    public function __construct(array $freightShipmentErrorDescription = array())
    {
        $this
            ->setFreightShipmentErrorDescription($freightShipmentErrorDescription);
    }
    /**
     * Get freightShipmentErrorDescription value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription[]|null
     */
    public function getFreightShipmentErrorDescription()
    {
        return $this->freightShipmentErrorDescription;
    }
    /**
     * Set freightShipmentErrorDescription value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription[] $freightShipmentErrorDescription
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription
     */
    public function setFreightShipmentErrorDescription(array $freightShipmentErrorDescription = array())
    {
        foreach ($freightShipmentErrorDescription as $arrayOfFreightShipmentErrorDescriptionFreightShipmentErrorDescriptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreightShipmentErrorDescriptionFreightShipmentErrorDescriptionItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentErrorDescription property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription, "%s" given', is_object($arrayOfFreightShipmentErrorDescriptionFreightShipmentErrorDescriptionItem) ? get_class($arrayOfFreightShipmentErrorDescriptionFreightShipmentErrorDescriptionItem) : gettype($arrayOfFreightShipmentErrorDescriptionFreightShipmentErrorDescriptionItem)), __LINE__);
            }
        }
        $this->freightShipmentErrorDescription = $freightShipmentErrorDescription;
        return $this;
    }
    /**
     * Add item to freightShipmentErrorDescription value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription
     */
    public function addToFreightShipmentErrorDescription(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentErrorDescription property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentErrorDescription[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentErrorDescription
     */
    public function getAttributeName()
    {
        return 'freightShipmentErrorDescription';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription
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
