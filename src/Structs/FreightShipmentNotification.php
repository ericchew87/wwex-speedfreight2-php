<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentNotification Structs
 * @subpackage Structs
 */
class FreightShipmentNotification extends AbstractStructBase
{
    /**
     * The notification
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $notification;
    /**
     * Constructor method for FreightShipmentNotification
     * @uses FreightShipmentNotification::setNotification()
     * @param string $notification
     */
    public function __construct($notification = null)
    {
        $this
            ->setNotification($notification);
    }
    /**
     * Get notification value
     * @return string|null
     */
    public function getNotification()
    {
        return $this->notification;
    }
    /**
     * Set notification value
     * @param string $notification
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification
     */
    public function setNotification($notification = null)
    {
        // validation for constraint: string
        if (!is_null($notification) && !is_string($notification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notification)), __LINE__);
        }
        $this->notification = $notification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentNotification
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
