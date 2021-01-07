<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for voidSpeedFreightShipmentResponse Structs
 * @subpackage Structs
 */
class VoidSpeedFreightShipmentResponse extends AbstractStructBase
{
    /**
     * The voidSpeedFreightShipmentReturn
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResponse
     */
    public $voidSpeedFreightShipmentReturn;
    /**
     * Constructor method for voidSpeedFreightShipmentResponse
     * @uses VoidSpeedFreightShipmentResponse::setVoidSpeedFreightShipmentReturn()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResponse $voidSpeedFreightShipmentReturn
     */
    public function __construct(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResponse $voidSpeedFreightShipmentReturn = null)
    {
        $this
            ->setVoidSpeedFreightShipmentReturn($voidSpeedFreightShipmentReturn);
    }
    /**
     * Get voidSpeedFreightShipmentReturn value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResponse|null
     */
    public function getVoidSpeedFreightShipmentReturn()
    {
        return $this->voidSpeedFreightShipmentReturn;
    }
    /**
     * Set voidSpeedFreightShipmentReturn value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResponse $voidSpeedFreightShipmentReturn
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\VoidSpeedFreightShipmentResponse
     */
    public function setVoidSpeedFreightShipmentReturn(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidResponse $voidSpeedFreightShipmentReturn = null)
    {
        $this->voidSpeedFreightShipmentReturn = $voidSpeedFreightShipmentReturn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\VoidSpeedFreightShipmentResponse
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
