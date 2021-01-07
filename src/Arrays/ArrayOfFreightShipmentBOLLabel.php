<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentBOLLabel Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentBOLLabel extends AbstractStructArrayBase
{
    /**
     * The freightShipmentBOLLabel
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel[]
     */
    public $freightShipmentBOLLabel;
    /**
     * Constructor method for ArrayOfFreightShipmentBOLLabel
     * @uses ArrayOfFreightShipmentBOLLabel::setFreightShipmentBOLLabel()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel[] $freightShipmentBOLLabel
     */
    public function __construct(array $freightShipmentBOLLabel = array())
    {
        $this
            ->setFreightShipmentBOLLabel($freightShipmentBOLLabel);
    }
    /**
     * Get freightShipmentBOLLabel value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel[]|null
     */
    public function getFreightShipmentBOLLabel()
    {
        return $this->freightShipmentBOLLabel;
    }
    /**
     * Set freightShipmentBOLLabel value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel[] $freightShipmentBOLLabel
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLLabel
     */
    public function setFreightShipmentBOLLabel(array $freightShipmentBOLLabel = array())
    {
        foreach ($freightShipmentBOLLabel as $arrayOfFreightShipmentBOLLabelFreightShipmentBOLLabelItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreightShipmentBOLLabelFreightShipmentBOLLabelItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentBOLLabel property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel, "%s" given', is_object($arrayOfFreightShipmentBOLLabelFreightShipmentBOLLabelItem) ? get_class($arrayOfFreightShipmentBOLLabelFreightShipmentBOLLabelItem) : gettype($arrayOfFreightShipmentBOLLabelFreightShipmentBOLLabelItem)), __LINE__);
            }
        }
        $this->freightShipmentBOLLabel = $freightShipmentBOLLabel;
        return $this;
    }
    /**
     * Add item to freightShipmentBOLLabel value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLLabel
     */
    public function addToFreightShipmentBOLLabel(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentBOLLabel property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentBOLLabel[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentBOLLabel
     */
    public function getAttributeName()
    {
        return 'freightShipmentBOLLabel';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLLabel
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
