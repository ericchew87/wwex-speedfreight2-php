<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSHandlingUnit Arrays
 * @subpackage Arrays
 */
class ArrayOfWSHandlingUnit extends AbstractStructArrayBase
{
    /**
     * The wsHandlingUnit
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit[]
     */
    public $wsHandlingUnit;
    /**
     * Constructor method for ArrayOfWSHandlingUnit
     * @uses ArrayOfWSHandlingUnit::setWsHandlingUnit()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit[] $wsHandlingUnit
     */
    public function __construct(array $wsHandlingUnit = array())
    {
        $this
            ->setWsHandlingUnit($wsHandlingUnit);
    }
    /**
     * Get wsHandlingUnit value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit[]|null
     */
    public function getWsHandlingUnit()
    {
        return $this->wsHandlingUnit;
    }
    /**
     * Set wsHandlingUnit value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit[] $wsHandlingUnit
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSHandlingUnit
     */
    public function setWsHandlingUnit(array $wsHandlingUnit = array())
    {
        foreach ($wsHandlingUnit as $arrayOfWSHandlingUnitWsHandlingUnitItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSHandlingUnitWsHandlingUnitItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit) {
                throw new \InvalidArgumentException(sprintf('The wsHandlingUnit property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit, "%s" given', is_object($arrayOfWSHandlingUnitWsHandlingUnitItem) ? get_class($arrayOfWSHandlingUnitWsHandlingUnitItem) : gettype($arrayOfWSHandlingUnitWsHandlingUnitItem)), __LINE__);
            }
        }
        $this->wsHandlingUnit = $wsHandlingUnit;
        return $this;
    }
    /**
     * Add item to wsHandlingUnit value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSHandlingUnit
     */
    public function addToWsHandlingUnit(\ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit) {
            throw new \InvalidArgumentException(sprintf('The wsHandlingUnit property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->wsHandlingUnit[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string wsHandlingUnit
     */
    public function getAttributeName()
    {
        return 'wsHandlingUnit';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSHandlingUnit
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
