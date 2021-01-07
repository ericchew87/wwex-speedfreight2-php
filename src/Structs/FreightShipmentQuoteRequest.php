<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentQuoteRequest Structs
 * @subpackage Structs
 */
class FreightShipmentQuoteRequest extends AbstractStructBase
{
    /**
     * The senderCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderCity;
    /**
     * The senderState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderState;
    /**
     * The senderZip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderZip;
    /**
     * The senderCountryCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderCountryCode;
    /**
     * The insidePickup
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insidePickup;
    /**
     * The liftgatePickup
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $liftgatePickup;
    /**
     * The residentialPickup
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residentialPickup;
    /**
     * The tradeshowPickup
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tradeshowPickup;
    /**
     * The constructionSitePickup
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $constructionSitePickup;
    /**
     * The limitedAccessPickup
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $limitedAccessPickup;
    /**
     * The limitedAccessPickupType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $limitedAccessPickupType;
    /**
     * The receiverCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverCity;
    /**
     * The receiverState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverState;
    /**
     * The receiverZip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverZip;
    /**
     * The receiverCountryCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverCountryCode;
    /**
     * The insideDelivery
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insideDelivery;
    /**
     * The liftgateDelivery
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $liftgateDelivery;
    /**
     * The residentialDelivery
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residentialDelivery;
    /**
     * The tradeshowDelivery
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tradeshowDelivery;
    /**
     * The constructionSiteDelivery
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $constructionSiteDelivery;
    /**
     * The limitedAccessDelivery
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $limitedAccessDelivery;
    /**
     * The limitedAccessDeliveryType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $limitedAccessDeliveryType;
    /**
     * The notifyBeforeDelivery
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $notifyBeforeDelivery;
    /**
     * The collectOnDelivery
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $collectOnDelivery;
    /**
     * The collectOnDeliveryAmount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $collectOnDeliveryAmount;
    /**
     * The CODIncludingFreightCharge
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CODIncludingFreightCharge;
    /**
     * The shipmentDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shipmentDate;
    /**
     * The insuranceDetail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail
     */
    public $insuranceDetail;
    /**
     * The commdityDetails
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCommodityDetails
     */
    public $commdityDetails;
    /**
     * Constructor method for FreightShipmentQuoteRequest
     * @uses FreightShipmentQuoteRequest::setSenderCity()
     * @uses FreightShipmentQuoteRequest::setSenderState()
     * @uses FreightShipmentQuoteRequest::setSenderZip()
     * @uses FreightShipmentQuoteRequest::setSenderCountryCode()
     * @uses FreightShipmentQuoteRequest::setInsidePickup()
     * @uses FreightShipmentQuoteRequest::setLiftgatePickup()
     * @uses FreightShipmentQuoteRequest::setResidentialPickup()
     * @uses FreightShipmentQuoteRequest::setTradeshowPickup()
     * @uses FreightShipmentQuoteRequest::setConstructionSitePickup()
     * @uses FreightShipmentQuoteRequest::setLimitedAccessPickup()
     * @uses FreightShipmentQuoteRequest::setLimitedAccessPickupType()
     * @uses FreightShipmentQuoteRequest::setReceiverCity()
     * @uses FreightShipmentQuoteRequest::setReceiverState()
     * @uses FreightShipmentQuoteRequest::setReceiverZip()
     * @uses FreightShipmentQuoteRequest::setReceiverCountryCode()
     * @uses FreightShipmentQuoteRequest::setInsideDelivery()
     * @uses FreightShipmentQuoteRequest::setLiftgateDelivery()
     * @uses FreightShipmentQuoteRequest::setResidentialDelivery()
     * @uses FreightShipmentQuoteRequest::setTradeshowDelivery()
     * @uses FreightShipmentQuoteRequest::setConstructionSiteDelivery()
     * @uses FreightShipmentQuoteRequest::setLimitedAccessDelivery()
     * @uses FreightShipmentQuoteRequest::setLimitedAccessDeliveryType()
     * @uses FreightShipmentQuoteRequest::setNotifyBeforeDelivery()
     * @uses FreightShipmentQuoteRequest::setCollectOnDelivery()
     * @uses FreightShipmentQuoteRequest::setCollectOnDeliveryAmount()
     * @uses FreightShipmentQuoteRequest::setCODIncludingFreightCharge()
     * @uses FreightShipmentQuoteRequest::setShipmentDate()
     * @uses FreightShipmentQuoteRequest::setInsuranceDetail()
     * @uses FreightShipmentQuoteRequest::setCommdityDetails()
     * @param string $senderCity
     * @param string $senderState
     * @param string $senderZip
     * @param string $senderCountryCode
     * @param string $insidePickup
     * @param string $liftgatePickup
     * @param string $residentialPickup
     * @param string $tradeshowPickup
     * @param string $constructionSitePickup
     * @param string $limitedAccessPickup
     * @param string $limitedAccessPickupType
     * @param string $receiverCity
     * @param string $receiverState
     * @param string $receiverZip
     * @param string $receiverCountryCode
     * @param string $insideDelivery
     * @param string $liftgateDelivery
     * @param string $residentialDelivery
     * @param string $tradeshowDelivery
     * @param string $constructionSiteDelivery
     * @param string $limitedAccessDelivery
     * @param string $limitedAccessDeliveryType
     * @param string $notifyBeforeDelivery
     * @param string $collectOnDelivery
     * @param string $collectOnDeliveryAmount
     * @param string $cODIncludingFreightCharge
     * @param string $shipmentDate
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail $insuranceDetail
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCommodityDetails $commdityDetails
     */
    public function __construct($senderCity = null, $senderState = null, $senderZip = null, $senderCountryCode = null, $insidePickup = null, $liftgatePickup = null, $residentialPickup = null, $tradeshowPickup = null, $constructionSitePickup = null, $limitedAccessPickup = null, $limitedAccessPickupType = null, $receiverCity = null, $receiverState = null, $receiverZip = null, $receiverCountryCode = null, $insideDelivery = null, $liftgateDelivery = null, $residentialDelivery = null, $tradeshowDelivery = null, $constructionSiteDelivery = null, $limitedAccessDelivery = null, $limitedAccessDeliveryType = null, $notifyBeforeDelivery = null, $collectOnDelivery = null, $collectOnDeliveryAmount = null, $cODIncludingFreightCharge = null, $shipmentDate = null, \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail $insuranceDetail = null, \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCommodityDetails $commdityDetails = null)
    {
        $this
            ->setSenderCity($senderCity)
            ->setSenderState($senderState)
            ->setSenderZip($senderZip)
            ->setSenderCountryCode($senderCountryCode)
            ->setInsidePickup($insidePickup)
            ->setLiftgatePickup($liftgatePickup)
            ->setResidentialPickup($residentialPickup)
            ->setTradeshowPickup($tradeshowPickup)
            ->setConstructionSitePickup($constructionSitePickup)
            ->setLimitedAccessPickup($limitedAccessPickup)
            ->setLimitedAccessPickupType($limitedAccessPickupType)
            ->setReceiverCity($receiverCity)
            ->setReceiverState($receiverState)
            ->setReceiverZip($receiverZip)
            ->setReceiverCountryCode($receiverCountryCode)
            ->setInsideDelivery($insideDelivery)
            ->setLiftgateDelivery($liftgateDelivery)
            ->setResidentialDelivery($residentialDelivery)
            ->setTradeshowDelivery($tradeshowDelivery)
            ->setConstructionSiteDelivery($constructionSiteDelivery)
            ->setLimitedAccessDelivery($limitedAccessDelivery)
            ->setLimitedAccessDeliveryType($limitedAccessDeliveryType)
            ->setNotifyBeforeDelivery($notifyBeforeDelivery)
            ->setCollectOnDelivery($collectOnDelivery)
            ->setCollectOnDeliveryAmount($collectOnDeliveryAmount)
            ->setCODIncludingFreightCharge($cODIncludingFreightCharge)
            ->setShipmentDate($shipmentDate)
            ->setInsuranceDetail($insuranceDetail)
            ->setCommdityDetails($commdityDetails);
    }
    /**
     * Get senderCity value
     * @return string|null
     */
    public function getSenderCity()
    {
        return $this->senderCity;
    }
    /**
     * Set senderCity value
     * @param string $senderCity
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setSenderCity($senderCity = null)
    {
        // validation for constraint: string
        if (!is_null($senderCity) && !is_string($senderCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderCity)), __LINE__);
        }
        $this->senderCity = $senderCity;
        return $this;
    }
    /**
     * Get senderState value
     * @return string|null
     */
    public function getSenderState()
    {
        return $this->senderState;
    }
    /**
     * Set senderState value
     * @param string $senderState
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setSenderState($senderState = null)
    {
        // validation for constraint: string
        if (!is_null($senderState) && !is_string($senderState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderState)), __LINE__);
        }
        $this->senderState = $senderState;
        return $this;
    }
    /**
     * Get senderZip value
     * @return string|null
     */
    public function getSenderZip()
    {
        return $this->senderZip;
    }
    /**
     * Set senderZip value
     * @param string $senderZip
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setSenderZip($senderZip = null)
    {
        // validation for constraint: string
        if (!is_null($senderZip) && !is_string($senderZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderZip)), __LINE__);
        }
        $this->senderZip = $senderZip;
        return $this;
    }
    /**
     * Get senderCountryCode value
     * @return string|null
     */
    public function getSenderCountryCode()
    {
        return $this->senderCountryCode;
    }
    /**
     * Set senderCountryCode value
     * @param string $senderCountryCode
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setSenderCountryCode($senderCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($senderCountryCode) && !is_string($senderCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderCountryCode)), __LINE__);
        }
        $this->senderCountryCode = $senderCountryCode;
        return $this;
    }
    /**
     * Get insidePickup value
     * @return string|null
     */
    public function getInsidePickup()
    {
        return $this->insidePickup;
    }
    /**
     * Set insidePickup value
     * @param string $insidePickup
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setInsidePickup($insidePickup = null)
    {
        // validation for constraint: string
        if (!is_null($insidePickup) && !is_string($insidePickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insidePickup)), __LINE__);
        }
        $this->insidePickup = $insidePickup;
        return $this;
    }
    /**
     * Get liftgatePickup value
     * @return string|null
     */
    public function getLiftgatePickup()
    {
        return $this->liftgatePickup;
    }
    /**
     * Set liftgatePickup value
     * @param string $liftgatePickup
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setLiftgatePickup($liftgatePickup = null)
    {
        // validation for constraint: string
        if (!is_null($liftgatePickup) && !is_string($liftgatePickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($liftgatePickup)), __LINE__);
        }
        $this->liftgatePickup = $liftgatePickup;
        return $this;
    }
    /**
     * Get residentialPickup value
     * @return string|null
     */
    public function getResidentialPickup()
    {
        return $this->residentialPickup;
    }
    /**
     * Set residentialPickup value
     * @param string $residentialPickup
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setResidentialPickup($residentialPickup = null)
    {
        // validation for constraint: string
        if (!is_null($residentialPickup) && !is_string($residentialPickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residentialPickup)), __LINE__);
        }
        $this->residentialPickup = $residentialPickup;
        return $this;
    }
    /**
     * Get tradeshowPickup value
     * @return string|null
     */
    public function getTradeshowPickup()
    {
        return $this->tradeshowPickup;
    }
    /**
     * Set tradeshowPickup value
     * @param string $tradeshowPickup
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setTradeshowPickup($tradeshowPickup = null)
    {
        // validation for constraint: string
        if (!is_null($tradeshowPickup) && !is_string($tradeshowPickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradeshowPickup)), __LINE__);
        }
        $this->tradeshowPickup = $tradeshowPickup;
        return $this;
    }
    /**
     * Get constructionSitePickup value
     * @return string|null
     */
    public function getConstructionSitePickup()
    {
        return $this->constructionSitePickup;
    }
    /**
     * Set constructionSitePickup value
     * @param string $constructionSitePickup
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setConstructionSitePickup($constructionSitePickup = null)
    {
        // validation for constraint: string
        if (!is_null($constructionSitePickup) && !is_string($constructionSitePickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($constructionSitePickup)), __LINE__);
        }
        $this->constructionSitePickup = $constructionSitePickup;
        return $this;
    }
    /**
     * Get limitedAccessPickup value
     * @return string|null
     */
    public function getLimitedAccessPickup()
    {
        return $this->limitedAccessPickup;
    }
    /**
     * Set limitedAccessPickup value
     * @param string $limitedAccessPickup
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setLimitedAccessPickup($limitedAccessPickup = null)
    {
        // validation for constraint: string
        if (!is_null($limitedAccessPickup) && !is_string($limitedAccessPickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($limitedAccessPickup)), __LINE__);
        }
        $this->limitedAccessPickup = $limitedAccessPickup;
        return $this;
    }
    /**
     * Get limitedAccessPickupType value
     * @return string|null
     */
    public function getLimitedAccessPickupType()
    {
        return $this->limitedAccessPickupType;
    }
    /**
     * Set limitedAccessPickupType value
     * @param string $limitedAccessPickupType
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setLimitedAccessPickupType($limitedAccessPickupType = null)
    {
        // validation for constraint: string
        if (!is_null($limitedAccessPickupType) && !is_string($limitedAccessPickupType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($limitedAccessPickupType)), __LINE__);
        }
        $this->limitedAccessPickupType = $limitedAccessPickupType;
        return $this;
    }
    /**
     * Get receiverCity value
     * @return string|null
     */
    public function getReceiverCity()
    {
        return $this->receiverCity;
    }
    /**
     * Set receiverCity value
     * @param string $receiverCity
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setReceiverCity($receiverCity = null)
    {
        // validation for constraint: string
        if (!is_null($receiverCity) && !is_string($receiverCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverCity)), __LINE__);
        }
        $this->receiverCity = $receiverCity;
        return $this;
    }
    /**
     * Get receiverState value
     * @return string|null
     */
    public function getReceiverState()
    {
        return $this->receiverState;
    }
    /**
     * Set receiverState value
     * @param string $receiverState
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setReceiverState($receiverState = null)
    {
        // validation for constraint: string
        if (!is_null($receiverState) && !is_string($receiverState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverState)), __LINE__);
        }
        $this->receiverState = $receiverState;
        return $this;
    }
    /**
     * Get receiverZip value
     * @return string|null
     */
    public function getReceiverZip()
    {
        return $this->receiverZip;
    }
    /**
     * Set receiverZip value
     * @param string $receiverZip
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setReceiverZip($receiverZip = null)
    {
        // validation for constraint: string
        if (!is_null($receiverZip) && !is_string($receiverZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverZip)), __LINE__);
        }
        $this->receiverZip = $receiverZip;
        return $this;
    }
    /**
     * Get receiverCountryCode value
     * @return string|null
     */
    public function getReceiverCountryCode()
    {
        return $this->receiverCountryCode;
    }
    /**
     * Set receiverCountryCode value
     * @param string $receiverCountryCode
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setReceiverCountryCode($receiverCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($receiverCountryCode) && !is_string($receiverCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverCountryCode)), __LINE__);
        }
        $this->receiverCountryCode = $receiverCountryCode;
        return $this;
    }
    /**
     * Get insideDelivery value
     * @return string|null
     */
    public function getInsideDelivery()
    {
        return $this->insideDelivery;
    }
    /**
     * Set insideDelivery value
     * @param string $insideDelivery
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setInsideDelivery($insideDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($insideDelivery) && !is_string($insideDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insideDelivery)), __LINE__);
        }
        $this->insideDelivery = $insideDelivery;
        return $this;
    }
    /**
     * Get liftgateDelivery value
     * @return string|null
     */
    public function getLiftgateDelivery()
    {
        return $this->liftgateDelivery;
    }
    /**
     * Set liftgateDelivery value
     * @param string $liftgateDelivery
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setLiftgateDelivery($liftgateDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($liftgateDelivery) && !is_string($liftgateDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($liftgateDelivery)), __LINE__);
        }
        $this->liftgateDelivery = $liftgateDelivery;
        return $this;
    }
    /**
     * Get residentialDelivery value
     * @return string|null
     */
    public function getResidentialDelivery()
    {
        return $this->residentialDelivery;
    }
    /**
     * Set residentialDelivery value
     * @param string $residentialDelivery
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setResidentialDelivery($residentialDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($residentialDelivery) && !is_string($residentialDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residentialDelivery)), __LINE__);
        }
        $this->residentialDelivery = $residentialDelivery;
        return $this;
    }
    /**
     * Get tradeshowDelivery value
     * @return string|null
     */
    public function getTradeshowDelivery()
    {
        return $this->tradeshowDelivery;
    }
    /**
     * Set tradeshowDelivery value
     * @param string $tradeshowDelivery
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setTradeshowDelivery($tradeshowDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($tradeshowDelivery) && !is_string($tradeshowDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradeshowDelivery)), __LINE__);
        }
        $this->tradeshowDelivery = $tradeshowDelivery;
        return $this;
    }
    /**
     * Get constructionSiteDelivery value
     * @return string|null
     */
    public function getConstructionSiteDelivery()
    {
        return $this->constructionSiteDelivery;
    }
    /**
     * Set constructionSiteDelivery value
     * @param string $constructionSiteDelivery
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setConstructionSiteDelivery($constructionSiteDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($constructionSiteDelivery) && !is_string($constructionSiteDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($constructionSiteDelivery)), __LINE__);
        }
        $this->constructionSiteDelivery = $constructionSiteDelivery;
        return $this;
    }
    /**
     * Get limitedAccessDelivery value
     * @return string|null
     */
    public function getLimitedAccessDelivery()
    {
        return $this->limitedAccessDelivery;
    }
    /**
     * Set limitedAccessDelivery value
     * @param string $limitedAccessDelivery
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setLimitedAccessDelivery($limitedAccessDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($limitedAccessDelivery) && !is_string($limitedAccessDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($limitedAccessDelivery)), __LINE__);
        }
        $this->limitedAccessDelivery = $limitedAccessDelivery;
        return $this;
    }
    /**
     * Get limitedAccessDeliveryType value
     * @return string|null
     */
    public function getLimitedAccessDeliveryType()
    {
        return $this->limitedAccessDeliveryType;
    }
    /**
     * Set limitedAccessDeliveryType value
     * @param string $limitedAccessDeliveryType
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setLimitedAccessDeliveryType($limitedAccessDeliveryType = null)
    {
        // validation for constraint: string
        if (!is_null($limitedAccessDeliveryType) && !is_string($limitedAccessDeliveryType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($limitedAccessDeliveryType)), __LINE__);
        }
        $this->limitedAccessDeliveryType = $limitedAccessDeliveryType;
        return $this;
    }
    /**
     * Get notifyBeforeDelivery value
     * @return string|null
     */
    public function getNotifyBeforeDelivery()
    {
        return $this->notifyBeforeDelivery;
    }
    /**
     * Set notifyBeforeDelivery value
     * @param string $notifyBeforeDelivery
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setNotifyBeforeDelivery($notifyBeforeDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($notifyBeforeDelivery) && !is_string($notifyBeforeDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notifyBeforeDelivery)), __LINE__);
        }
        $this->notifyBeforeDelivery = $notifyBeforeDelivery;
        return $this;
    }
    /**
     * Get collectOnDelivery value
     * @return string|null
     */
    public function getCollectOnDelivery()
    {
        return $this->collectOnDelivery;
    }
    /**
     * Set collectOnDelivery value
     * @param string $collectOnDelivery
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setCollectOnDelivery($collectOnDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($collectOnDelivery) && !is_string($collectOnDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($collectOnDelivery)), __LINE__);
        }
        $this->collectOnDelivery = $collectOnDelivery;
        return $this;
    }
    /**
     * Get collectOnDeliveryAmount value
     * @return string|null
     */
    public function getCollectOnDeliveryAmount()
    {
        return $this->collectOnDeliveryAmount;
    }
    /**
     * Set collectOnDeliveryAmount value
     * @param string $collectOnDeliveryAmount
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setCollectOnDeliveryAmount($collectOnDeliveryAmount = null)
    {
        // validation for constraint: string
        if (!is_null($collectOnDeliveryAmount) && !is_string($collectOnDeliveryAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($collectOnDeliveryAmount)), __LINE__);
        }
        $this->collectOnDeliveryAmount = $collectOnDeliveryAmount;
        return $this;
    }
    /**
     * Get CODIncludingFreightCharge value
     * @return string|null
     */
    public function getCODIncludingFreightCharge()
    {
        return $this->CODIncludingFreightCharge;
    }
    /**
     * Set CODIncludingFreightCharge value
     * @param string $cODIncludingFreightCharge
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setCODIncludingFreightCharge($cODIncludingFreightCharge = null)
    {
        // validation for constraint: string
        if (!is_null($cODIncludingFreightCharge) && !is_string($cODIncludingFreightCharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cODIncludingFreightCharge)), __LINE__);
        }
        $this->CODIncludingFreightCharge = $cODIncludingFreightCharge;
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
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
     * Get insuranceDetail value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail|null
     */
    public function getInsuranceDetail()
    {
        return $this->insuranceDetail;
    }
    /**
     * Set insuranceDetail value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail $insuranceDetail
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setInsuranceDetail(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsuranceDetail $insuranceDetail = null)
    {
        $this->insuranceDetail = $insuranceDetail;
        return $this;
    }
    /**
     * Get commdityDetails value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCommodityDetails|null
     */
    public function getCommdityDetails()
    {
        return $this->commdityDetails;
    }
    /**
     * Set commdityDetails value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCommodityDetails $commdityDetails
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
     */
    public function setCommdityDetails(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCommodityDetails $commdityDetails = null)
    {
        $this->commdityDetails = $commdityDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteRequest
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
