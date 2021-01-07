<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bookSpeedFreightShipmentResponse Structs
 * @subpackage Structs
 */
class BookSpeedFreightShipmentResponse extends AbstractStructBase
{
    /**
     * The bookSpeedFreightShipmentReturn
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
     */
    public $bookSpeedFreightShipmentReturn;
    /**
     * Constructor method for bookSpeedFreightShipmentResponse
     * @uses BookSpeedFreightShipmentResponse::setBookSpeedFreightShipmentReturn()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse $bookSpeedFreightShipmentReturn
     */
    public function __construct(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse $bookSpeedFreightShipmentReturn = null)
    {
        $this
            ->setBookSpeedFreightShipmentReturn($bookSpeedFreightShipmentReturn);
    }
    /**
     * Get bookSpeedFreightShipmentReturn value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse|null
     */
    public function getBookSpeedFreightShipmentReturn()
    {
        return $this->bookSpeedFreightShipmentReturn;
    }
    /**
     * Set bookSpeedFreightShipmentReturn value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse $bookSpeedFreightShipmentReturn
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\BookSpeedFreightShipmentResponse
     */
    public function setBookSpeedFreightShipmentReturn(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse $bookSpeedFreightShipmentReturn = null)
    {
        $this->bookSpeedFreightShipmentReturn = $bookSpeedFreightShipmentReturn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\BookSpeedFreightShipmentResponse
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
