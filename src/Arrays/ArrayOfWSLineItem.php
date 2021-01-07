<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSLineItem Arrays
 * @subpackage Arrays
 */
class ArrayOfWSLineItem extends AbstractStructArrayBase
{
    /**
     * The wsLineItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem[]
     */
    public $wsLineItem;
    /**
     * Constructor method for ArrayOfWSLineItem
     * @uses ArrayOfWSLineItem::setWsLineItem()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem[] $wsLineItem
     */
    public function __construct(array $wsLineItem = array())
    {
        $this
            ->setWsLineItem($wsLineItem);
    }
    /**
     * Get wsLineItem value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem[]|null
     */
    public function getWsLineItem()
    {
        return $this->wsLineItem;
    }
    /**
     * Set wsLineItem value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem[] $wsLineItem
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSLineItem
     */
    public function setWsLineItem(array $wsLineItem = array())
    {
        foreach ($wsLineItem as $arrayOfWSLineItemWsLineItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSLineItemWsLineItemItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem) {
                throw new \InvalidArgumentException(sprintf('The wsLineItem property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem, "%s" given', is_object($arrayOfWSLineItemWsLineItemItem) ? get_class($arrayOfWSLineItemWsLineItemItem) : gettype($arrayOfWSLineItemWsLineItemItem)), __LINE__);
            }
        }
        $this->wsLineItem = $wsLineItem;
        return $this;
    }
    /**
     * Add item to wsLineItem value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSLineItem
     */
    public function addToWsLineItem(\ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem) {
            throw new \InvalidArgumentException(sprintf('The wsLineItem property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->wsLineItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string wsLineItem
     */
    public function getAttributeName()
    {
        return 'wsLineItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSLineItem
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
