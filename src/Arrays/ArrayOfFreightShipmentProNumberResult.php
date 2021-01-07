<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentProNumberResult Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentProNumberResult extends AbstractStructArrayBase
{
    /**
     * The freightShipmentProNumberResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult[]
     */
    public $freightShipmentProNumberResult;
    /**
     * Constructor method for ArrayOfFreightShipmentProNumberResult
     * @uses ArrayOfFreightShipmentProNumberResult::setFreightShipmentProNumberResult()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult[] $freightShipmentProNumberResult
     */
    public function __construct(array $freightShipmentProNumberResult = array())
    {
        $this
            ->setFreightShipmentProNumberResult($freightShipmentProNumberResult);
    }
    /**
     * Get freightShipmentProNumberResult value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult[]|null
     */
    public function getFreightShipmentProNumberResult()
    {
        return $this->freightShipmentProNumberResult;
    }
    /**
     * Set freightShipmentProNumberResult value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult[] $freightShipmentProNumberResult
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentProNumberResult
     */
    public function setFreightShipmentProNumberResult(array $freightShipmentProNumberResult = array())
    {
        foreach ($freightShipmentProNumberResult as $arrayOfFreightShipmentProNumberResultFreightShipmentProNumberResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreightShipmentProNumberResultFreightShipmentProNumberResultItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentProNumberResult property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult, "%s" given', is_object($arrayOfFreightShipmentProNumberResultFreightShipmentProNumberResultItem) ? get_class($arrayOfFreightShipmentProNumberResultFreightShipmentProNumberResultItem) : gettype($arrayOfFreightShipmentProNumberResultFreightShipmentProNumberResultItem)), __LINE__);
            }
        }
        $this->freightShipmentProNumberResult = $freightShipmentProNumberResult;
        return $this;
    }
    /**
     * Add item to freightShipmentProNumberResult value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentProNumberResult
     */
    public function addToFreightShipmentProNumberResult(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentProNumberResult property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentProNumberResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentProNumberResult
     */
    public function getAttributeName()
    {
        return 'freightShipmentProNumberResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentProNumberResult
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
