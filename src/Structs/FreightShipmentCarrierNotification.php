<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentCarrierNotification Structs
 * @subpackage Structs
 */
class FreightShipmentCarrierNotification extends AbstractStructBase
{
    /**
     * The carrierNotification
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $carrierNotification;
    /**
     * Constructor method for FreightShipmentCarrierNotification
     * @uses FreightShipmentCarrierNotification::setCarrierNotification()
     * @param string $carrierNotification
     */
    public function __construct($carrierNotification = null)
    {
        $this
            ->setCarrierNotification($carrierNotification);
    }
    /**
     * Get carrierNotification value
     * @return string|null
     */
    public function getCarrierNotification()
    {
        return $this->carrierNotification;
    }
    /**
     * Set carrierNotification value
     * @param string $carrierNotification
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification
     */
    public function setCarrierNotification($carrierNotification = null)
    {
        // validation for constraint: string
        if (!is_null($carrierNotification) && !is_string($carrierNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierNotification)), __LINE__);
        }
        $this->carrierNotification = $carrierNotification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCarrierNotification
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
