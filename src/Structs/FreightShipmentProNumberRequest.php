<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentProNumberRequest Structs
 * @subpackage Structs
 */
class FreightShipmentProNumberRequest extends AbstractStructBase
{
    /**
     * The shipmentBOLNumbers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLNumber
     */
    public $shipmentBOLNumbers;
    /**
     * Constructor method for FreightShipmentProNumberRequest
     * @uses FreightShipmentProNumberRequest::setShipmentBOLNumbers()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLNumber $shipmentBOLNumbers
     */
    public function __construct(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLNumber $shipmentBOLNumbers = null)
    {
        $this
            ->setShipmentBOLNumbers($shipmentBOLNumbers);
    }
    /**
     * Get shipmentBOLNumbers value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLNumber|null
     */
    public function getShipmentBOLNumbers()
    {
        return $this->shipmentBOLNumbers;
    }
    /**
     * Set shipmentBOLNumbers value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLNumber $shipmentBOLNumbers
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberRequest
     */
    public function setShipmentBOLNumbers(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLNumber $shipmentBOLNumbers = null)
    {
        $this->shipmentBOLNumbers = $shipmentBOLNumbers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberRequest
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
