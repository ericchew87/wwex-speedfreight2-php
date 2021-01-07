<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSpeedFreightShipmentProNumber Structs
 * @subpackage Structs
 */
class GetSpeedFreightShipmentProNumber extends AbstractStructBase
{
    /**
     * The freightShipmentProNumberRequest
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberRequest
     */
    public $freightShipmentProNumberRequest;
    /**
     * Constructor method for getSpeedFreightShipmentProNumber
     * @uses GetSpeedFreightShipmentProNumber::setFreightShipmentProNumberRequest()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberRequest $freightShipmentProNumberRequest
     */
    public function __construct(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberRequest $freightShipmentProNumberRequest = null)
    {
        $this
            ->setFreightShipmentProNumberRequest($freightShipmentProNumberRequest);
    }
    /**
     * Get freightShipmentProNumberRequest value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberRequest|null
     */
    public function getFreightShipmentProNumberRequest()
    {
        return $this->freightShipmentProNumberRequest;
    }
    /**
     * Set freightShipmentProNumberRequest value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberRequest $freightShipmentProNumberRequest
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\GetSpeedFreightShipmentProNumber
     */
    public function setFreightShipmentProNumberRequest(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberRequest $freightShipmentProNumberRequest = null)
    {
        $this->freightShipmentProNumberRequest = $freightShipmentProNumberRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\GetSpeedFreightShipmentProNumber
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
