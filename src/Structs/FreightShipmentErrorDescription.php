<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentErrorDescription Structs
 * @subpackage Structs
 */
class FreightShipmentErrorDescription extends AbstractStructBase
{
    /**
     * The errorDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $errorDescription;
    /**
     * Constructor method for FreightShipmentErrorDescription
     * @uses FreightShipmentErrorDescription::setErrorDescription()
     * @param string $errorDescription
     */
    public function __construct($errorDescription = null)
    {
        $this
            ->setErrorDescription($errorDescription);
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $errorDescription
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription
     */
    public function setErrorDescription($errorDescription = null)
    {
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorDescription)), __LINE__);
        }
        $this->errorDescription = $errorDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentErrorDescription
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
