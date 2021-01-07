<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for quoteSpeedFreightShipment Structs
 * @subpackage Structs
 */
class QuoteSpeedFreightShipment extends AbstractStructBase
{
    /**
     * The freightShipmentQuoteRequest
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public $freightShipmentQuoteRequest;
    /**
     * Constructor method for quoteSpeedFreightShipment
     * @uses QuoteSpeedFreightShipment::setFreightShipmentQuoteRequest()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest $freightShipmentQuoteRequest
     */
    public function __construct(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest $freightShipmentQuoteRequest = null)
    {
        $this
            ->setFreightShipmentQuoteRequest($freightShipmentQuoteRequest);
    }
    /**
     * Get freightShipmentQuoteRequest value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest|null
     */
    public function getFreightShipmentQuoteRequest()
    {
        return $this->freightShipmentQuoteRequest;
    }
    /**
     * Set freightShipmentQuoteRequest value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest $freightShipmentQuoteRequest
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\QuoteSpeedFreightShipment
     */
    public function setFreightShipmentQuoteRequest(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest $freightShipmentQuoteRequest = null)
    {
        $this->freightShipmentQuoteRequest = $freightShipmentQuoteRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\QuoteSpeedFreightShipment
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
