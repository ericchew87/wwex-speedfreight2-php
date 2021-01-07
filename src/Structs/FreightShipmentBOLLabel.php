<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentBOLLabel Structs
 * @subpackage Structs
 */
class FreightShipmentBOLLabel extends AbstractStructBase
{
    /**
     * The base64BOLLabel
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $base64BOLLabel;
    /**
     * Constructor method for FreightShipmentBOLLabel
     * @uses FreightShipmentBOLLabel::setBase64BOLLabel()
     * @param string $base64BOLLabel
     */
    public function __construct($base64BOLLabel = null)
    {
        $this
            ->setBase64BOLLabel($base64BOLLabel);
    }
    /**
     * Get base64BOLLabel value
     * @return string|null
     */
    public function getBase64BOLLabel()
    {
        return $this->base64BOLLabel;
    }
    /**
     * Set base64BOLLabel value
     * @param string $base64BOLLabel
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel
     */
    public function setBase64BOLLabel($base64BOLLabel = null)
    {
        // validation for constraint: string
        if (!is_null($base64BOLLabel) && !is_string($base64BOLLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($base64BOLLabel)), __LINE__);
        }
        $this->base64BOLLabel = $base64BOLLabel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBOLLabel
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
