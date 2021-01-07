<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentVoidResult Structs
 * @subpackage Structs
 */
class FreightShipmentVoidResult extends AbstractStructBase
{
    /**
     * The bolNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bolNumber;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * Constructor method for FreightShipmentVoidResult
     * @uses FreightShipmentVoidResult::setBolNumber()
     * @uses FreightShipmentVoidResult::setDescription()
     * @param string $bolNumber
     * @param string $description
     */
    public function __construct($bolNumber = null, $description = null)
    {
        $this
            ->setBolNumber($bolNumber)
            ->setDescription($description);
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult
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
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResult
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
