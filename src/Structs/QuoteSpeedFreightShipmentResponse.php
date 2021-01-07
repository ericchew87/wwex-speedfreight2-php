<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for quoteSpeedFreightShipmentResponse Structs
 * @subpackage Structs
 */
class QuoteSpeedFreightShipmentResponse extends AbstractStructBase
{
    /**
     * The quoteSpeedFreightShipmentReturn
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResponse
     */
    public $quoteSpeedFreightShipmentReturn;
    /**
     * Constructor method for quoteSpeedFreightShipmentResponse
     * @uses QuoteSpeedFreightShipmentResponse::setQuoteSpeedFreightShipmentReturn()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResponse $quoteSpeedFreightShipmentReturn
     */
    public function __construct(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResponse $quoteSpeedFreightShipmentReturn = null)
    {
        $this
            ->setQuoteSpeedFreightShipmentReturn($quoteSpeedFreightShipmentReturn);
    }
    /**
     * Get quoteSpeedFreightShipmentReturn value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResponse|null
     */
    public function getQuoteSpeedFreightShipmentReturn()
    {
        return $this->quoteSpeedFreightShipmentReturn;
    }
    /**
     * Set quoteSpeedFreightShipmentReturn value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResponse $quoteSpeedFreightShipmentReturn
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\QuoteSpeedFreightShipmentResponse
     */
    public function setQuoteSpeedFreightShipmentReturn(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResponse $quoteSpeedFreightShipmentReturn = null)
    {
        $this->quoteSpeedFreightShipmentReturn = $quoteSpeedFreightShipmentReturn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\QuoteSpeedFreightShipmentResponse
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
