<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentProNumberResult Structs
 * @subpackage Structs
 */
class FreightShipmentProNumberResult extends AbstractStructBase
{
    /**
     * The bolNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bolNumber;
    /**
     * The proNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $proNumber;
    /**
     * Constructor method for FreightShipmentProNumberResult
     * @uses FreightShipmentProNumberResult::setBolNumber()
     * @uses FreightShipmentProNumberResult::setProNumber()
     * @param string $bolNumber
     * @param string $proNumber
     */
    public function __construct($bolNumber = null, $proNumber = null)
    {
        $this
            ->setBolNumber($bolNumber)
            ->setProNumber($proNumber);
    }
    /**
     * Get bolNumber value
     * @return string|null
     */
    public function getBolNumber()
    {
        return $this->bolNumber;
    }
    /**
     * Set bolNumber value
     * @param string $bolNumber
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult
     */
    public function setBolNumber($bolNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bolNumber) && !is_string($bolNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bolNumber)), __LINE__);
        }
        $this->bolNumber = $bolNumber;
        return $this;
    }
    /**
     * Get proNumber value
     * @return string|null
     */
    public function getProNumber()
    {
        return $this->proNumber;
    }
    /**
     * Set proNumber value
     * @param string $proNumber
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult
     */
    public function setProNumber($proNumber = null)
    {
        // validation for constraint: string
        if (!is_null($proNumber) && !is_string($proNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proNumber)), __LINE__);
        }
        $this->proNumber = $proNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResult
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
