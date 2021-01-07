<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSpeedFreightShipmentProNumberResponse Structs
 * @subpackage Structs
 */
class GetSpeedFreightShipmentProNumberResponse extends AbstractStructBase
{
    /**
     * The getSpeedFreightShipmentProNumberReturn
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse
     */
    public $getSpeedFreightShipmentProNumberReturn;
    /**
     * Constructor method for getSpeedFreightShipmentProNumberResponse
     * @uses GetSpeedFreightShipmentProNumberResponse::setGetSpeedFreightShipmentProNumberReturn()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse $getSpeedFreightShipmentProNumberReturn
     */
    public function __construct(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse $getSpeedFreightShipmentProNumberReturn = null)
    {
        $this
            ->setGetSpeedFreightShipmentProNumberReturn($getSpeedFreightShipmentProNumberReturn);
    }
    /**
     * Get getSpeedFreightShipmentProNumberReturn value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse|null
     */
    public function getGetSpeedFreightShipmentProNumberReturn()
    {
        return $this->getSpeedFreightShipmentProNumberReturn;
    }
    /**
     * Set getSpeedFreightShipmentProNumberReturn value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse $getSpeedFreightShipmentProNumberReturn
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\GetSpeedFreightShipmentProNumberResponse
     */
    public function setGetSpeedFreightShipmentProNumberReturn(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse $getSpeedFreightShipmentProNumberReturn = null)
    {
        $this->getSpeedFreightShipmentProNumberReturn = $getSpeedFreightShipmentProNumberReturn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\GetSpeedFreightShipmentProNumberResponse
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
