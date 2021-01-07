<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSLineItem Structs
 * @subpackage Structs
 */
class WSLineItem extends AbstractStructBase
{
    /**
     * The lineItemClass
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemClass;
    /**
     * The lineItemWeight
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemWeight;
    /**
     * The lineItemDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemDescription;
    /**
     * The lineItemNMFC
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemNMFC;
    /**
     * The lineItemPieceType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineItemPieceType;
    /**
     * The piecesOfLineItem
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $piecesOfLineItem;
    /**
     * The isHazmatLineItem
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $isHazmatLineItem;
    /**
     * The lineItemHazmatInfo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo
     */
    public $lineItemHazmatInfo;
    /**
     * Constructor method for WSLineItem
     * @uses WSLineItem::setLineItemClass()
     * @uses WSLineItem::setLineItemWeight()
     * @uses WSLineItem::setLineItemDescription()
     * @uses WSLineItem::setLineItemNMFC()
     * @uses WSLineItem::setLineItemPieceType()
     * @uses WSLineItem::setPiecesOfLineItem()
     * @uses WSLineItem::setIsHazmatLineItem()
     * @uses WSLineItem::setLineItemHazmatInfo()
     * @param string $lineItemClass
     * @param string $lineItemWeight
     * @param string $lineItemDescription
     * @param string $lineItemNMFC
     * @param string $lineItemPieceType
     * @param string $piecesOfLineItem
     * @param string $isHazmatLineItem
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo $lineItemHazmatInfo
     */
    public function __construct($lineItemClass = null, $lineItemWeight = null, $lineItemDescription = null, $lineItemNMFC = null, $lineItemPieceType = null, $piecesOfLineItem = null, $isHazmatLineItem = null, \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo $lineItemHazmatInfo = null)
    {
        $this
            ->setLineItemClass($lineItemClass)
            ->setLineItemWeight($lineItemWeight)
            ->setLineItemDescription($lineItemDescription)
            ->setLineItemNMFC($lineItemNMFC)
            ->setLineItemPieceType($lineItemPieceType)
            ->setPiecesOfLineItem($piecesOfLineItem)
            ->setIsHazmatLineItem($isHazmatLineItem)
            ->setLineItemHazmatInfo($lineItemHazmatInfo);
    }
    /**
     * Get lineItemClass value
     * @return string|null
     */
    public function getLineItemClass()
    {
        return $this->lineItemClass;
    }
    /**
     * Set lineItemClass value
     * @param string $lineItemClass
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem
     */
    public function setLineItemClass($lineItemClass = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemClass) && !is_string($lineItemClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemClass)), __LINE__);
        }
        $this->lineItemClass = $lineItemClass;
        return $this;
    }
    /**
     * Get lineItemWeight value
     * @return string|null
     */
    public function getLineItemWeight()
    {
        return $this->lineItemWeight;
    }
    /**
     * Set lineItemWeight value
     * @param string $lineItemWeight
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem
     */
    public function setLineItemWeight($lineItemWeight = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemWeight) && !is_string($lineItemWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemWeight)), __LINE__);
        }
        $this->lineItemWeight = $lineItemWeight;
        return $this;
    }
    /**
     * Get lineItemDescription value
     * @return string|null
     */
    public function getLineItemDescription()
    {
        return $this->lineItemDescription;
    }
    /**
     * Set lineItemDescription value
     * @param string $lineItemDescription
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem
     */
    public function setLineItemDescription($lineItemDescription = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemDescription) && !is_string($lineItemDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemDescription)), __LINE__);
        }
        $this->lineItemDescription = $lineItemDescription;
        return $this;
    }
    /**
     * Get lineItemNMFC value
     * @return string|null
     */
    public function getLineItemNMFC()
    {
        return $this->lineItemNMFC;
    }
    /**
     * Set lineItemNMFC value
     * @param string $lineItemNMFC
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem
     */
    public function setLineItemNMFC($lineItemNMFC = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemNMFC) && !is_string($lineItemNMFC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemNMFC)), __LINE__);
        }
        $this->lineItemNMFC = $lineItemNMFC;
        return $this;
    }
    /**
     * Get lineItemPieceType value
     * @return string|null
     */
    public function getLineItemPieceType()
    {
        return $this->lineItemPieceType;
    }
    /**
     * Set lineItemPieceType value
     * @param string $lineItemPieceType
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem
     */
    public function setLineItemPieceType($lineItemPieceType = null)
    {
        // validation for constraint: string
        if (!is_null($lineItemPieceType) && !is_string($lineItemPieceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineItemPieceType)), __LINE__);
        }
        $this->lineItemPieceType = $lineItemPieceType;
        return $this;
    }
    /**
     * Get piecesOfLineItem value
     * @return string|null
     */
    public function getPiecesOfLineItem()
    {
        return $this->piecesOfLineItem;
    }
    /**
     * Set piecesOfLineItem value
     * @param string $piecesOfLineItem
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem
     */
    public function setPiecesOfLineItem($piecesOfLineItem = null)
    {
        // validation for constraint: string
        if (!is_null($piecesOfLineItem) && !is_string($piecesOfLineItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($piecesOfLineItem)), __LINE__);
        }
        $this->piecesOfLineItem = $piecesOfLineItem;
        return $this;
    }
    /**
     * Get isHazmatLineItem value
     * @return string|null
     */
    public function getIsHazmatLineItem()
    {
        return $this->isHazmatLineItem;
    }
    /**
     * Set isHazmatLineItem value
     * @param string $isHazmatLineItem
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem
     */
    public function setIsHazmatLineItem($isHazmatLineItem = null)
    {
        // validation for constraint: string
        if (!is_null($isHazmatLineItem) && !is_string($isHazmatLineItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($isHazmatLineItem)), __LINE__);
        }
        $this->isHazmatLineItem = $isHazmatLineItem;
        return $this;
    }
    /**
     * Get lineItemHazmatInfo value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo|null
     */
    public function getLineItemHazmatInfo()
    {
        return $this->lineItemHazmatInfo;
    }
    /**
     * Set lineItemHazmatInfo value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo $lineItemHazmatInfo
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem
     */
    public function setLineItemHazmatInfo(\ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItemHazmatInfo $lineItemHazmatInfo = null)
    {
        $this->lineItemHazmatInfo = $lineItemHazmatInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\WSLineItem
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
