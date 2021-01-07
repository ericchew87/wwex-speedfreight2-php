<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentCarrierNotification Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentCarrierNotification extends AbstractStructArrayBase
{
    /**
     * The freightShipmentCarrierNotification
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification[]
     */
    public $freightShipmentCarrierNotification;
    /**
     * Constructor method for ArrayOfFreightShipmentCarrierNotification
     * @uses ArrayOfFreightShipmentCarrierNotification::setFreightShipmentCarrierNotification()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification[] $freightShipmentCarrierNotification
     */
    public function __construct(array $freightShipmentCarrierNotification = array())
    {
        $this
            ->setFreightShipmentCarrierNotification($freightShipmentCarrierNotification);
    }
    /**
     * Get freightShipmentCarrierNotification value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification[]|null
     */
    public function getFreightShipmentCarrierNotification()
    {
        return $this->freightShipmentCarrierNotification;
    }
    /**
     * Set freightShipmentCarrierNotification value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification[] $freightShipmentCarrierNotification
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentCarrierNotification
     */
    public function setFreightShipmentCarrierNotification(array $freightShipmentCarrierNotification = array())
    {
        foreach ($freightShipmentCarrierNotification as $arrayOfFreightShipmentCarrierNotificationFreightShipmentCarrierNotificationItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreightShipmentCarrierNotificationFreightShipmentCarrierNotificationItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentCarrierNotification property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification, "%s" given', is_object($arrayOfFreightShipmentCarrierNotificationFreightShipmentCarrierNotificationItem) ? get_class($arrayOfFreightShipmentCarrierNotificationFreightShipmentCarrierNotificationItem) : gettype($arrayOfFreightShipmentCarrierNotificationFreightShipmentCarrierNotificationItem)), __LINE__);
            }
        }
        $this->freightShipmentCarrierNotification = $freightShipmentCarrierNotification;
        return $this;
    }
    /**
     * Add item to freightShipmentCarrierNotification value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentCarrierNotification
     */
    public function addToFreightShipmentCarrierNotification(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentCarrierNotification property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentCarrierNotification[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentCarrierNotification
     */
    public function getAttributeName()
    {
        return 'freightShipmentCarrierNotification';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentCarrierNotification
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
