<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSLineItemHazmatInfo Structs
 * @subpackage Structs
 */
class WSLineItemHazmatInfo extends AbstractStructBase
{
    /**
     * The lineItemHazmatUNNumberHeader
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemHazmatUNNumberHeader;
    /**
     * The lineItemHazmatUNNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemHazmatUNNumber;
    /**
     * The lineItemHazmatClass
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemHazmatClass;
    /**
     * The lineItemHazmatEmContactPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemHazmatEmContactPhone;
    /**
     * The lineItemHazmatPackagingGroup
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemHazmatPackagingGroup;
    /**
     * Constructor method for WSLineItemHazmatInfo
     * @uses WSLineItemHazmatInfo::setLineItemHazmatUNNumberHeader()
     * @uses WSLineItemHazmatInfo::setLineItemHazmatUNNumber()
     * @uses WSLineItemHazmatInfo::setLineItemHazmatClass()
     * @uses WSLineItemHazmatInfo::setLineItemHazmatEmContactPhone()
     * @uses WSLineItemHazmatInfo::setLineItemHazmatPackagingGroup()
     * @param string $lineItemHazmatUNNumberHeader
     * @param string $lineItemHazmatUNNumber
     * @param string $lineItemHazmatClass
     * @param string $lineItemHazmatEmContactPhone
     * @param string $lineItemHazmatPackagingGroup
     */
    public function __construct($lineItemHazmatUNNumberHeader = null, $lineItemHazmatUNNumber = null, $lineItemHazmatClass = null, $lineItemHazmatEmContactPhone = null, $lineItemHazmatPackagingGroup = null)
    {
        $this
            ->setLineItemHazmatUNNumberHeader($lineItemHazmatUNNumberHeader)
            ->setLineItemHazmatUNNumber($lineItemHazmatUNNumber)
            ->setLineItemHazmatClass($lineItemHazmatClass)
            ->setLineItemHazmatEmContactPhone($lineItemHazmatEmContactPhone)
            ->setLineItemHazmatPackagingGroup($lineItemHazmatPackagingGroup);
    }
    /**
     * Get lineItemHazmatUNNumberHeader value
     * @return string|null
     */
    public function getLineItemHazmatUNNumberHeader()
    {
        return $this->lineItemHazmatUNNumberHeader;
    }
    /**
     * Set lineItemHazmatUNNumberHeader value
     * @param string $lineItemHazmatUNNumberHeader
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo
     */
    public function setLineItemHazmatUNNumberHeader($lineItemHazmatUNNumberHeader = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemHazmatUNNumberHeader) && !is_string($lineItemHazmatUNNumberHeader)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemHazmatUNNumberHeader)), __LINE__);
        }
        $this->lineItemHazmatUNNumberHeader = $lineItemHazmatUNNumberHeader;
        return $this;
    }
    /**
     * Get lineItemHazmatUNNumber value
     * @return string|null
     */
    public function getLineItemHazmatUNNumber()
    {
        return $this->lineItemHazmatUNNumber;
    }
    /**
     * Set lineItemHazmatUNNumber value
     * @param string $lineItemHazmatUNNumber
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo
     */
    public function setLineItemHazmatUNNumber($lineItemHazmatUNNumber = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemHazmatUNNumber) && !is_string($lineItemHazmatUNNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemHazmatUNNumber)), __LINE__);
        }
        $this->lineItemHazmatUNNumber = $lineItemHazmatUNNumber;
        return $this;
    }
    /**
     * Get lineItemHazmatClass value
     * @return string|null
     */
    public function getLineItemHazmatClass()
    {
        return $this->lineItemHazmatClass;
    }
    /**
     * Set lineItemHazmatClass value
     * @param string $lineItemHazmatClass
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo
     */
    public function setLineItemHazmatClass($lineItemHazmatClass = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemHazmatClass) && !is_string($lineItemHazmatClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemHazmatClass)), __LINE__);
        }
        $this->lineItemHazmatClass = $lineItemHazmatClass;
        return $this;
    }
    /**
     * Get lineItemHazmatEmContactPhone value
     * @return string|null
     */
    public function getLineItemHazmatEmContactPhone()
    {
        return $this->lineItemHazmatEmContactPhone;
    }
    /**
     * Set lineItemHazmatEmContactPhone value
     * @param string $lineItemHazmatEmContactPhone
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo
     */
    public function setLineItemHazmatEmContactPhone($lineItemHazmatEmContactPhone = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemHazmatEmContactPhone) && !is_string($lineItemHazmatEmContactPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemHazmatEmContactPhone)), __LINE__);
        }
        $this->lineItemHazmatEmContactPhone = $lineItemHazmatEmContactPhone;
        return $this;
    }
    /**
     * Get lineItemHazmatPackagingGroup value
     * @return string|null
     */
    public function getLineItemHazmatPackagingGroup()
    {
        return $this->lineItemHazmatPackagingGroup;
    }
    /**
     * Set lineItemHazmatPackagingGroup value
     * @param string $lineItemHazmatPackagingGroup
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo
     */
    public function setLineItemHazmatPackagingGroup($lineItemHazmatPackagingGroup = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemHazmatPackagingGroup) && !is_string($lineItemHazmatPackagingGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemHazmatPackagingGroup)), __LINE__);
        }
        $this->lineItemHazmatPackagingGroup = $lineItemHazmatPackagingGroup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo
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
