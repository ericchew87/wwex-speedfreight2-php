<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentBookRequest Structs
 * @subpackage Structs
 */
class FreightShipmentBookRequest extends AbstractStructBase
{
    /**
     * The shipmentQuoteId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shipmentQuoteId;
    /**
     * The freightShipmentSenderDetail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
     */
    public $freightShipmentSenderDetail;
    /**
     * The freightShipmentReceiverDetail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public $freightShipmentReceiverDetail;
    /**
     * The shipmentDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shipmentDate;
    /**
     * The shipmentReadyTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shipmentReadyTime;
    /**
     * The shipmentClosingTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shipmentClosingTime;
    /**
     * The freightShipmentCODInfo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo
     */
    public $freightShipmentCODInfo;
    /**
     * The freightShipmentInsuranceDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDescription
     */
    public $freightShipmentInsuranceDescription;
    /**
     * The shipmentReferences
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentReference
     */
    public $shipmentReferences;
    /**
     * The specialInstruction
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $specialInstruction;
    /**
     * The freightShipmentAddressLabel
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentAddressLabel
     */
    public $freightShipmentAddressLabel;
    /**
     * Constructor method for FreightShipmentBookRequest
     * @uses FreightShipmentBookRequest::setShipmentQuoteId()
     * @uses FreightShipmentBookRequest::setFreightShipmentSenderDetail()
     * @uses FreightShipmentBookRequest::setFreightShipmentReceiverDetail()
     * @uses FreightShipmentBookRequest::setShipmentDate()
     * @uses FreightShipmentBookRequest::setShipmentReadyTime()
     * @uses FreightShipmentBookRequest::setShipmentClosingTime()
     * @uses FreightShipmentBookRequest::setFreightShipmentCODInfo()
     * @uses FreightShipmentBookRequest::setFreightShipmentInsuranceDescription()
     * @uses FreightShipmentBookRequest::setShipmentReferences()
     * @uses FreightShipmentBookRequest::setSpecialInstruction()
     * @uses FreightShipmentBookRequest::setFreightShipmentAddressLabel()
     * @param string $shipmentQuoteId
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail $freightShipmentSenderDetail
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail $freightShipmentReceiverDetail
     * @param string $shipmentDate
     * @param string $shipmentReadyTime
     * @param string $shipmentClosingTime
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo $freightShipmentCODInfo
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDescription $freightShipmentInsuranceDescription
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentReference $shipmentReferences
     * @param string $specialInstruction
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentAddressLabel $freightShipmentAddressLabel
     */
    public function __construct($shipmentQuoteId = null, \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail $freightShipmentSenderDetail = null, \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail $freightShipmentReceiverDetail = null, $shipmentDate = null, $shipmentReadyTime = null, $shipmentClosingTime = null, \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo $freightShipmentCODInfo = null, \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDescription $freightShipmentInsuranceDescription = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentReference $shipmentReferences = null, $specialInstruction = null, \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentAddressLabel $freightShipmentAddressLabel = null)
    {
        $this
            ->setShipmentQuoteId($shipmentQuoteId)
            ->setFreightShipmentSenderDetail($freightShipmentSenderDetail)
            ->setFreightShipmentReceiverDetail($freightShipmentReceiverDetail)
            ->setShipmentDate($shipmentDate)
            ->setShipmentReadyTime($shipmentReadyTime)
            ->setShipmentClosingTime($shipmentClosingTime)
            ->setFreightShipmentCODInfo($freightShipmentCODInfo)
            ->setFreightShipmentInsuranceDescription($freightShipmentInsuranceDescription)
            ->setShipmentReferences($shipmentReferences)
            ->setSpecialInstruction($specialInstruction)
            ->setFreightShipmentAddressLabel($freightShipmentAddressLabel);
    }
    /**
     * Get shipmentQuoteId value
     * @return string|null
     */
    public function getShipmentQuoteId()
    {
        return $this->shipmentQuoteId;
    }
    /**
     * Set shipmentQuoteId value
     * @param string $shipmentQuoteId
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setShipmentQuoteId($shipmentQuoteId = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentQuoteId) && !is_string($shipmentQuoteId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentQuoteId)), __LINE__);
        }
        $this->shipmentQuoteId = $shipmentQuoteId;
        return $this;
    }
    /**
     * Get freightShipmentSenderDetail value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail|null
     */
    public function getFreightShipmentSenderDetail()
    {
        return $this->freightShipmentSenderDetail;
    }
    /**
     * Set freightShipmentSenderDetail value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail $freightShipmentSenderDetail
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setFreightShipmentSenderDetail(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail $freightShipmentSenderDetail = null)
    {
        $this->freightShipmentSenderDetail = $freightShipmentSenderDetail;
        return $this;
    }
    /**
     * Get freightShipmentReceiverDetail value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail|null
     */
    public function getFreightShipmentReceiverDetail()
    {
        return $this->freightShipmentReceiverDetail;
    }
    /**
     * Set freightShipmentReceiverDetail value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail $freightShipmentReceiverDetail
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setFreightShipmentReceiverDetail(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail $freightShipmentReceiverDetail = null)
    {
        $this->freightShipmentReceiverDetail = $freightShipmentReceiverDetail;
        return $this;
    }
    /**
     * Get shipmentDate value
     * @return string|null
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }
    /**
     * Set shipmentDate value
     * @param string $shipmentDate
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setShipmentDate($shipmentDate = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentDate) && !is_string($shipmentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentDate)), __LINE__);
        }
        $this->shipmentDate = $shipmentDate;
        return $this;
    }
    /**
     * Get shipmentReadyTime value
     * @return string|null
     */
    public function getShipmentReadyTime()
    {
        return $this->shipmentReadyTime;
    }
    /**
     * Set shipmentReadyTime value
     * @param string $shipmentReadyTime
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setShipmentReadyTime($shipmentReadyTime = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentReadyTime) && !is_string($shipmentReadyTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentReadyTime)), __LINE__);
        }
        $this->shipmentReadyTime = $shipmentReadyTime;
        return $this;
    }
    /**
     * Get shipmentClosingTime value
     * @return string|null
     */
    public function getShipmentClosingTime()
    {
        return $this->shipmentClosingTime;
    }
    /**
     * Set shipmentClosingTime value
     * @param string $shipmentClosingTime
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setShipmentClosingTime($shipmentClosingTime = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentClosingTime) && !is_string($shipmentClosingTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentClosingTime)), __LINE__);
        }
        $this->shipmentClosingTime = $shipmentClosingTime;
        return $this;
    }
    /**
     * Get freightShipmentCODInfo value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo|null
     */
    public function getFreightShipmentCODInfo()
    {
        return $this->freightShipmentCODInfo;
    }
    /**
     * Set freightShipmentCODInfo value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo $freightShipmentCODInfo
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setFreightShipmentCODInfo(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo $freightShipmentCODInfo = null)
    {
        $this->freightShipmentCODInfo = $freightShipmentCODInfo;
        return $this;
    }
    /**
     * Get freightShipmentInsuranceDescription value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDescription|null
     */
    public function getFreightShipmentInsuranceDescription()
    {
        return $this->freightShipmentInsuranceDescription;
    }
    /**
     * Set freightShipmentInsuranceDescription value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDescription $freightShipmentInsuranceDescription
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setFreightShipmentInsuranceDescription(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDescription $freightShipmentInsuranceDescription = null)
    {
        $this->freightShipmentInsuranceDescription = $freightShipmentInsuranceDescription;
        return $this;
    }
    /**
     * Get shipmentReferences value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentReference|null
     */
    public function getShipmentReferences()
    {
        return $this->shipmentReferences;
    }
    /**
     * Set shipmentReferences value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentReference $shipmentReferences
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setShipmentReferences(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentReference $shipmentReferences = null)
    {
        $this->shipmentReferences = $shipmentReferences;
        return $this;
    }
    /**
     * Get specialInstruction value
     * @return string|null
     */
    public function getSpecialInstruction()
    {
        return $this->specialInstruction;
    }
    /**
     * Set specialInstruction value
     * @param string $specialInstruction
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setSpecialInstruction($specialInstruction = null)
    {
        // validation for constraint: string
        if (!is_null($specialInstruction) && !is_string($specialInstruction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialInstruction)), __LINE__);
        }
        $this->specialInstruction = $specialInstruction;
        return $this;
    }
    /**
     * Get freightShipmentAddressLabel value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentAddressLabel|null
     */
    public function getFreightShipmentAddressLabel()
    {
        return $this->freightShipmentAddressLabel;
    }
    /**
     * Set freightShipmentAddressLabel value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentAddressLabel $freightShipmentAddressLabel
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
     */
    public function setFreightShipmentAddressLabel(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentAddressLabel $freightShipmentAddressLabel = null)
    {
        $this->freightShipmentAddressLabel = $freightShipmentAddressLabel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookRequest
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
