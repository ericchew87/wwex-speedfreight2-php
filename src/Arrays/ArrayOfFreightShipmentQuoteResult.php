<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentQuoteResult Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentQuoteResult extends AbstractStructArrayBase
{
    /**
     * The freightShipmentQuoteResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult[]
     */
    public $freightShipmentQuoteResult;
    /**
     * Constructor method for ArrayOfFreightShipmentQuoteResult
     * @uses ArrayOfFreightShipmentQuoteResult::setFreightShipmentQuoteResult()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult[] $freightShipmentQuoteResult
     */
    public function __construct(array $freightShipmentQuoteResult = array())
    {
        $this
            ->setFreightShipmentQuoteResult($freightShipmentQuoteResult);
    }
    /**
     * Get freightShipmentQuoteResult value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult[]|null
     */
    public function getFreightShipmentQuoteResult()
    {
        return $this->freightShipmentQuoteResult;
    }
    /**
     * Set freightShipmentQuoteResult value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult[] $freightShipmentQuoteResult
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentQuoteResult
     */
    public function setFreightShipmentQuoteResult(array $freightShipmentQuoteResult = array())
    {
        foreach ($freightShipmentQuoteResult as $arrayOfFreightShipmentQuoteResultFreightShipmentQuoteResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreightShipmentQuoteResultFreightShipmentQuoteResultItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentQuoteResult property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult, "%s" given', is_object($arrayOfFreightShipmentQuoteResultFreightShipmentQuoteResultItem) ? get_class($arrayOfFreightShipmentQuoteResultFreightShipmentQuoteResultItem) : gettype($arrayOfFreightShipmentQuoteResultFreightShipmentQuoteResultItem)), __LINE__);
            }
        }
        $this->freightShipmentQuoteResult = $freightShipmentQuoteResult;
        return $this;
    }
    /**
     * Add item to freightShipmentQuoteResult value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentQuoteResult
     */
    public function addToFreightShipmentQuoteResult(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentQuoteResult property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentQuoteResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentQuoteResult
     */
    public function getAttributeName()
    {
        return 'freightShipmentQuoteResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentQuoteResult
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
