<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentCommodityDetails Structs
 * @subpackage Structs
 */
class FreightShipmentCommodityDetails extends AbstractStructBase
{
    /**
     * The is11FeetShipment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $is11FeetShipment;
    /**
     * The handlingUnitDetails
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSHandlingUnit
     */
    public $handlingUnitDetails;
    /**
     * Constructor method for FreightShipmentCommodityDetails
     * @uses FreightShipmentCommodityDetails::setIs11FeetShipment()
     * @uses FreightShipmentCommodityDetails::setHandlingUnitDetails()
     * @param string $is11FeetShipment
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSHandlingUnit $handlingUnitDetails
     */
    public function __construct($is11FeetShipment = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSHandlingUnit $handlingUnitDetails = null)
    {
        $this
            ->setIs11FeetShipment($is11FeetShipment)
            ->setHandlingUnitDetails($handlingUnitDetails);
    }
    /**
     * Get is11FeetShipment value
     * @return string|null
     */
    public function getIs11FeetShipment()
    {
        return $this->is11FeetShipment;
    }
    /**
     * Set is11FeetShipment value
     * @param string $is11FeetShipment
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCommodityDetails
     */
    public function setIs11FeetShipment($is11FeetShipment = null)
    {
        // validation for constraint: string
        if (!is_null($is11FeetShipment) && !is_string($is11FeetShipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($is11FeetShipment)), __LINE__);
        }
        $this->is11FeetShipment = $is11FeetShipment;
        return $this;
    }
    /**
     * Get handlingUnitDetails value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSHandlingUnit|null
     */
    public function getHandlingUnitDetails()
    {
        return $this->handlingUnitDetails;
    }
    /**
     * Set handlingUnitDetails value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSHandlingUnit $handlingUnitDetails
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCommodityDetails
     */
    public function setHandlingUnitDetails(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSHandlingUnit $handlingUnitDetails = null)
    {
        $this->handlingUnitDetails = $handlingUnitDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCommodityDetails
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
