<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for voidSpeedFreightShipment Structs
 * @subpackage Structs
 */
class VoidSpeedFreightShipment extends AbstractStructBase
{
    /**
     * The freightShipmentVoidRequest
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidRequest
     */
    public $freightShipmentVoidRequest;
    /**
     * Constructor method for voidSpeedFreightShipment
     * @uses VoidSpeedFreightShipment::setFreightShipmentVoidRequest()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidRequest $freightShipmentVoidRequest
     */
    public function __construct(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidRequest $freightShipmentVoidRequest = null)
    {
        $this
            ->setFreightShipmentVoidRequest($freightShipmentVoidRequest);
    }
    /**
     * Get freightShipmentVoidRequest value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidRequest|null
     */
    public function getFreightShipmentVoidRequest()
    {
        return $this->freightShipmentVoidRequest;
    }
    /**
     * Set freightShipmentVoidRequest value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidRequest $freightShipmentVoidRequest
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\VoidSpeedFreightShipment
     */
    public function setFreightShipmentVoidRequest(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentVoidRequest $freightShipmentVoidRequest = null)
    {
        $this->freightShipmentVoidRequest = $freightShipmentVoidRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\VoidSpeedFreightShipment
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
