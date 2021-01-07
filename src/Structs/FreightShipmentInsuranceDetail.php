<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentInsuranceDetail Structs
 * @subpackage Structs
 */
class FreightShipmentInsuranceDetail extends AbstractStructBase
{
    /**
     * The insuranceCategory
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insuranceCategory;
    /**
     * The insuredCommodityValue
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insuredCommodityValue;
    /**
     * The insuranceIncludingFreightCharge
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insuranceIncludingFreightCharge;
    /**
     * Constructor method for FreightShipmentInsuranceDetail
     * @uses FreightShipmentInsuranceDetail::setInsuranceCategory()
     * @uses FreightShipmentInsuranceDetail::setInsuredCommodityValue()
     * @uses FreightShipmentInsuranceDetail::setInsuranceIncludingFreightCharge()
     * @param string $insuranceCategory
     * @param string $insuredCommodityValue
     * @param string $insuranceIncludingFreightCharge
     */
    public function __construct($insuranceCategory = null, $insuredCommodityValue = null, $insuranceIncludingFreightCharge = null)
    {
        $this
            ->setInsuranceCategory($insuranceCategory)
            ->setInsuredCommodityValue($insuredCommodityValue)
            ->setInsuranceIncludingFreightCharge($insuranceIncludingFreightCharge);
    }
    /**
     * Get insuranceCategory value
     * @return string|null
     */
    public function getInsuranceCategory()
    {
        return $this->insuranceCategory;
    }
    /**
     * Set insuranceCategory value
     * @param string $insuranceCategory
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail
     */
    public function setInsuranceCategory($insuranceCategory = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceCategory) && !is_string($insuranceCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceCategory)), __LINE__);
        }
        $this->insuranceCategory = $insuranceCategory;
        return $this;
    }
    /**
     * Get insuredCommodityValue value
     * @return string|null
     */
    public function getInsuredCommodityValue()
    {
        return $this->insuredCommodityValue;
    }
    /**
     * Set insuredCommodityValue value
     * @param string $insuredCommodityValue
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail
     */
    public function setInsuredCommodityValue($insuredCommodityValue = null)
    {
        // validation for constraint: string
        if (!is_null($insuredCommodityValue) && !is_string($insuredCommodityValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuredCommodityValue)), __LINE__);
        }
        $this->insuredCommodityValue = $insuredCommodityValue;
        return $this;
    }
    /**
     * Get insuranceIncludingFreightCharge value
     * @return string|null
     */
    public function getInsuranceIncludingFreightCharge()
    {
        return $this->insuranceIncludingFreightCharge;
    }
    /**
     * Set insuranceIncludingFreightCharge value
     * @param string $insuranceIncludingFreightCharge
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail
     */
    public function setInsuranceIncludingFreightCharge($insuranceIncludingFreightCharge = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceIncludingFreightCharge) && !is_string($insuranceIncludingFreightCharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceIncludingFreightCharge)), __LINE__);
        }
        $this->insuranceIncludingFreightCharge = $insuranceIncludingFreightCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail
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
