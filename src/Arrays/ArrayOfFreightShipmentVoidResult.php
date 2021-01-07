<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentVoidResult Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentVoidResult extends AbstractStructArrayBase
{
    /**
     * The freightShipmentVoidResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult[]
     */
    public $freightShipmentVoidResult;
    /**
     * Constructor method for ArrayOfFreightShipmentVoidResult
     * @uses ArrayOfFreightShipmentVoidResult::setFreightShipmentVoidResult()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult[] $freightShipmentVoidResult
     */
    public function __construct(array $freightShipmentVoidResult = array())
    {
        $this
            ->setFreightShipmentVoidResult($freightShipmentVoidResult);
    }
    /**
     * Get freightShipmentVoidResult value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult[]|null
     */
    public function getFreightShipmentVoidResult()
    {
        return $this->freightShipmentVoidResult;
    }
    /**
     * Set freightShipmentVoidResult value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult[] $freightShipmentVoidResult
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentVoidResult
     */
    public function setFreightShipmentVoidResult(array $freightShipmentVoidResult = array())
    {
        foreach ($freightShipmentVoidResult as $arrayOfFreightShipmentVoidResultFreightShipmentVoidResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreightShipmentVoidResultFreightShipmentVoidResultItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentVoidResult property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult, "%s" given', is_object($arrayOfFreightShipmentVoidResultFreightShipmentVoidResultItem) ? get_class($arrayOfFreightShipmentVoidResultFreightShipmentVoidResultItem) : gettype($arrayOfFreightShipmentVoidResultFreightShipmentVoidResultItem)), __LINE__);
            }
        }
        $this->freightShipmentVoidResult = $freightShipmentVoidResult;
        return $this;
    }
    /**
     * Add item to freightShipmentVoidResult value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentVoidResult
     */
    public function addToFreightShipmentVoidResult(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentVoidResult property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentVoidResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentVoidResult
     */
    public function getAttributeName()
    {
        return 'freightShipmentVoidResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentVoidResult
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
