<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bookSpeedFreightShipment Structs
 * @subpackage Structs
 */
class BookSpeedFreightShipment extends AbstractStructBase
{
    /**
     * The freightShipmentBookRequest
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public $freightShipmentBookRequest;
    /**
     * Constructor method for bookSpeedFreightShipment
     * @uses BookSpeedFreightShipment::setFreightShipmentBookRequest()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest $freightShipmentBookRequest
     */
    public function __construct(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest $freightShipmentBookRequest = null)
    {
        $this
            ->setFreightShipmentBookRequest($freightShipmentBookRequest);
    }
    /**
     * Get freightShipmentBookRequest value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest|null
     */
    public function getFreightShipmentBookRequest()
    {
        return $this->freightShipmentBookRequest;
    }
    /**
     * Set freightShipmentBookRequest value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest $freightShipmentBookRequest
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\BookSpeedFreightShipment
     */
    public function setFreightShipmentBookRequest(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest $freightShipmentBookRequest = null)
    {
        $this->freightShipmentBookRequest = $freightShipmentBookRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\BookSpeedFreightShipment
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
