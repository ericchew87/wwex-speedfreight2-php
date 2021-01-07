<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentAddressLabel Structs
 * @subpackage Structs
 */
class FreightShipmentAddressLabel extends AbstractStructBase
{
    /**
     * The printShipmentAddessLabel
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $printShipmentAddessLabel;
    /**
     * The numberOfShipmentAddressLabel
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $numberOfShipmentAddressLabel;
    /**
     * Constructor method for FreightShipmentAddressLabel
     * @uses FreightShipmentAddressLabel::setPrintShipmentAddessLabel()
     * @uses FreightShipmentAddressLabel::setNumberOfShipmentAddressLabel()
     * @param string $printShipmentAddessLabel
     * @param string $numberOfShipmentAddressLabel
     */
    public function __construct($printShipmentAddessLabel = null, $numberOfShipmentAddressLabel = null)
    {
        $this
            ->setPrintShipmentAddessLabel($printShipmentAddessLabel)
            ->setNumberOfShipmentAddressLabel($numberOfShipmentAddressLabel);
    }
    /**
     * Get printShipmentAddessLabel value
     * @return string|null
     */
    public function getPrintShipmentAddessLabel()
    {
        return $this->printShipmentAddessLabel;
    }
    /**
     * Set printShipmentAddessLabel value
     * @param string $printShipmentAddessLabel
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentAddressLabel
     */
    public function setPrintShipmentAddessLabel($printShipmentAddessLabel = null)
    {
        // validation for constraint: string
        if (!is_null($printShipmentAddessLabel) && !is_string($printShipmentAddessLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($printShipmentAddessLabel)), __LINE__);
        }
        $this->printShipmentAddessLabel = $printShipmentAddessLabel;
        return $this;
    }
    /**
     * Get numberOfShipmentAddressLabel value
     * @return string|null
     */
    public function getNumberOfShipmentAddressLabel()
    {
        return $this->numberOfShipmentAddressLabel;
    }
    /**
     * Set numberOfShipmentAddressLabel value
     * @param string $numberOfShipmentAddressLabel
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentAddressLabel
     */
    public function setNumberOfShipmentAddressLabel($numberOfShipmentAddressLabel = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfShipmentAddressLabel) && !is_string($numberOfShipmentAddressLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfShipmentAddressLabel)), __LINE__);
        }
        $this->numberOfShipmentAddressLabel = $numberOfShipmentAddressLabel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentAddressLabel
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
