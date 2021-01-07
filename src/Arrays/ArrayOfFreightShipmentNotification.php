<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentNotification Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentNotification extends AbstractStructArrayBase
{
    /**
     * The freightShipmentNotification
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification[]
     */
    public $freightShipmentNotification;
    /**
     * Constructor method for ArrayOfFreightShipmentNotification
     * @uses ArrayOfFreightShipmentNotification::setFreightShipmentNotification()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification[] $freightShipmentNotification
     */
    public function __construct(array $freightShipmentNotification = array())
    {
        $this
            ->setFreightShipmentNotification($freightShipmentNotification);
    }
    /**
     * Get freightShipmentNotification value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification[]|null
     */
    public function getFreightShipmentNotification()
    {
        return $this->freightShipmentNotification;
    }
    /**
     * Set freightShipmentNotification value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification[] $freightShipmentNotification
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentNotification
     */
    public function setFreightShipmentNotification(array $freightShipmentNotification = array())
    {
        foreach ($freightShipmentNotification as $arrayOfFreightShipmentNotificationFreightShipmentNotificationItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreightShipmentNotificationFreightShipmentNotificationItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentNotification property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification, "%s" given', is_object($arrayOfFreightShipmentNotificationFreightShipmentNotificationItem) ? get_class($arrayOfFreightShipmentNotificationFreightShipmentNotificationItem) : gettype($arrayOfFreightShipmentNotificationFreightShipmentNotificationItem)), __LINE__);
            }
        }
        $this->freightShipmentNotification = $freightShipmentNotification;
        return $this;
    }
    /**
     * Add item to freightShipmentNotification value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentNotification
     */
    public function addToFreightShipmentNotification(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentNotification property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentNotification[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentNotification
     */
    public function getAttributeName()
    {
        return 'freightShipmentNotification';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentNotification
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
