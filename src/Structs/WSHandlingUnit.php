<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSHandlingUnit Structs
 * @subpackage Structs
 */
class WSHandlingUnit extends AbstractStructBase
{
    /**
     * The typeOfHandlingUnit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $typeOfHandlingUnit;
    /**
     * The numberOfHandlingUnit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $numberOfHandlingUnit;
    /**
     * The handlingUnitHeight
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $handlingUnitHeight;
    /**
     * The handlingUnitLength
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $handlingUnitLength;
    /**
     * The handlingUnitWidth
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $handlingUnitWidth;
    /**
     * The lineItemDetails
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSLineItem
     */
    public $lineItemDetails;
    /**
     * Constructor method for WSHandlingUnit
     * @uses WSHandlingUnit::setTypeOfHandlingUnit()
     * @uses WSHandlingUnit::setNumberOfHandlingUnit()
     * @uses WSHandlingUnit::setHandlingUnitHeight()
     * @uses WSHandlingUnit::setHandlingUnitLength()
     * @uses WSHandlingUnit::setHandlingUnitWidth()
     * @uses WSHandlingUnit::setLineItemDetails()
     * @param string $typeOfHandlingUnit
     * @param string $numberOfHandlingUnit
     * @param string $handlingUnitHeight
     * @param string $handlingUnitLength
     * @param string $handlingUnitWidth
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSLineItem $lineItemDetails
     */
    public function __construct($typeOfHandlingUnit = null, $numberOfHandlingUnit = null, $handlingUnitHeight = null, $handlingUnitLength = null, $handlingUnitWidth = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSLineItem $lineItemDetails = null)
    {
        $this
            ->setTypeOfHandlingUnit($typeOfHandlingUnit)
            ->setNumberOfHandlingUnit($numberOfHandlingUnit)
            ->setHandlingUnitHeight($handlingUnitHeight)
            ->setHandlingUnitLength($handlingUnitLength)
            ->setHandlingUnitWidth($handlingUnitWidth)
            ->setLineItemDetails($lineItemDetails);
    }
    /**
     * Get typeOfHandlingUnit value
     * @return string|null
     */
    public function getTypeOfHandlingUnit()
    {
        return $this->typeOfHandlingUnit;
    }
    /**
     * Set typeOfHandlingUnit value
     * @param string $typeOfHandlingUnit
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit
     */
    public function setTypeOfHandlingUnit($typeOfHandlingUnit = null)
    {
        // validation for constraint: string
        if (!is_null($typeOfHandlingUnit) && !is_string($typeOfHandlingUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeOfHandlingUnit)), __LINE__);
        }
        $this->typeOfHandlingUnit = $typeOfHandlingUnit;
        return $this;
    }
    /**
     * Get numberOfHandlingUnit value
     * @return string|null
     */
    public function getNumberOfHandlingUnit()
    {
        return $this->numberOfHandlingUnit;
    }
    /**
     * Set numberOfHandlingUnit value
     * @param string $numberOfHandlingUnit
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit
     */
    public function setNumberOfHandlingUnit($numberOfHandlingUnit = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfHandlingUnit) && !is_string($numberOfHandlingUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfHandlingUnit)), __LINE__);
        }
        $this->numberOfHandlingUnit = $numberOfHandlingUnit;
        return $this;
    }
    /**
     * Get handlingUnitHeight value
     * @return string|null
     */
    public function getHandlingUnitHeight()
    {
        return $this->handlingUnitHeight;
    }
    /**
     * Set handlingUnitHeight value
     * @param string $handlingUnitHeight
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit
     */
    public function setHandlingUnitHeight($handlingUnitHeight = null)
    {
        // validation for constraint: string
        if (!is_null($handlingUnitHeight) && !is_string($handlingUnitHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($handlingUnitHeight)), __LINE__);
        }
        $this->handlingUnitHeight = $handlingUnitHeight;
        return $this;
    }
    /**
     * Get handlingUnitLength value
     * @return string|null
     */
    public function getHandlingUnitLength()
    {
        return $this->handlingUnitLength;
    }
    /**
     * Set handlingUnitLength value
     * @param string $handlingUnitLength
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit
     */
    public function setHandlingUnitLength($handlingUnitLength = null)
    {
        // validation for constraint: string
        if (!is_null($handlingUnitLength) && !is_string($handlingUnitLength)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($handlingUnitLength)), __LINE__);
        }
        $this->handlingUnitLength = $handlingUnitLength;
        return $this;
    }
    /**
     * Get handlingUnitWidth value
     * @return string|null
     */
    public function getHandlingUnitWidth()
    {
        return $this->handlingUnitWidth;
    }
    /**
     * Set handlingUnitWidth value
     * @param string $handlingUnitWidth
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit
     */
    public function setHandlingUnitWidth($handlingUnitWidth = null)
    {
        // validation for constraint: string
        if (!is_null($handlingUnitWidth) && !is_string($handlingUnitWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($handlingUnitWidth)), __LINE__);
        }
        $this->handlingUnitWidth = $handlingUnitWidth;
        return $this;
    }
    /**
     * Get lineItemDetails value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSLineItem|null
     */
    public function getLineItemDetails()
    {
        return $this->lineItemDetails;
    }
    /**
     * Set lineItemDetails value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSLineItem $lineItemDetails
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit
     */
    public function setLineItemDetails(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfWSLineItem $lineItemDetails = null)
    {
        $this->lineItemDetails = $lineItemDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSHandlingUnit
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
