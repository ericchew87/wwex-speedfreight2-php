<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentInsuranceDescription Structs
 * @subpackage Structs
 */
class FreightShipmentInsuranceDescription extends AbstractStructBase
{
    /**
     * The insuranceDescriptionOfCargo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insuranceDescriptionOfCargo;
    /**
     * The insuranceMarksNumbers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insuranceMarksNumbers;
    /**
     * Constructor method for FreightShipmentInsuranceDescription
     * @uses FreightShipmentInsuranceDescription::setInsuranceDescriptionOfCargo()
     * @uses FreightShipmentInsuranceDescription::setInsuranceMarksNumbers()
     * @param string $insuranceDescriptionOfCargo
     * @param string $insuranceMarksNumbers
     */
    public function __construct($insuranceDescriptionOfCargo = null, $insuranceMarksNumbers = null)
    {
        $this
            ->setInsuranceDescriptionOfCargo($insuranceDescriptionOfCargo)
            ->setInsuranceMarksNumbers($insuranceMarksNumbers);
    }
    /**
     * Get insuranceDescriptionOfCargo value
     * @return string|null
     */
    public function getInsuranceDescriptionOfCargo()
    {
        return $this->insuranceDescriptionOfCargo;
    }
    /**
     * Set insuranceDescriptionOfCargo value
     * @param string $insuranceDescriptionOfCargo
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDescription
     */
    public function setInsuranceDescriptionOfCargo($insuranceDescriptionOfCargo = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceDescriptionOfCargo) && !is_string($insuranceDescriptionOfCargo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceDescriptionOfCargo)), __LINE__);
        }
        $this->insuranceDescriptionOfCargo = $insuranceDescriptionOfCargo;
        return $this;
    }
    /**
     * Get insuranceMarksNumbers value
     * @return string|null
     */
    public function getInsuranceMarksNumbers()
    {
        return $this->insuranceMarksNumbers;
    }
    /**
     * Set insuranceMarksNumbers value
     * @param string $insuranceMarksNumbers
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDescription
     */
    public function setInsuranceMarksNumbers($insuranceMarksNumbers = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceMarksNumbers) && !is_string($insuranceMarksNumbers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceMarksNumbers)), __LINE__);
        }
        $this->insuranceMarksNumbers = $insuranceMarksNumbers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDescription
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
