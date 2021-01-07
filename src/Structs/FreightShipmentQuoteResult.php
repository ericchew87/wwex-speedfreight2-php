<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentQuoteResult Structs
 * @subpackage Structs
 */
class FreightShipmentQuoteResult extends AbstractStructBase
{
    /**
     * The shipmentQuoteId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shipmentQuoteId;
    /**
     * The carrierSCAC
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $carrierSCAC;
    /**
     * The carrierName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $carrierName;
    /**
     * The totalPrice
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $totalPrice;
    /**
     * The transitDays
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $transitDays;
    /**
     * The guaranteedService
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $guaranteedService;
    /**
     * The highCostDeliveryShipment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $highCostDeliveryShipment;
    /**
     * The interline
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $interline;
    /**
     * The nmfcRequired
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nmfcRequired;
    /**
     * The carrierNotifications
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentCarrierNotification
     */
    public $carrierNotifications;
    /**
     * Constructor method for FreightShipmentQuoteResult
     * @uses FreightShipmentQuoteResult::setShipmentQuoteId()
     * @uses FreightShipmentQuoteResult::setCarrierSCAC()
     * @uses FreightShipmentQuoteResult::setCarrierName()
     * @uses FreightShipmentQuoteResult::setTotalPrice()
     * @uses FreightShipmentQuoteResult::setTransitDays()
     * @uses FreightShipmentQuoteResult::setGuaranteedService()
     * @uses FreightShipmentQuoteResult::setHighCostDeliveryShipment()
     * @uses FreightShipmentQuoteResult::setInterline()
     * @uses FreightShipmentQuoteResult::setNmfcRequired()
     * @uses FreightShipmentQuoteResult::setCarrierNotifications()
     * @param string $shipmentQuoteId
     * @param string $carrierSCAC
     * @param string $carrierName
     * @param string $totalPrice
     * @param string $transitDays
     * @param string $guaranteedService
     * @param string $highCostDeliveryShipment
     * @param string $interline
     * @param string $nmfcRequired
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentCarrierNotification $carrierNotifications
     */
    public function __construct($shipmentQuoteId = null, $carrierSCAC = null, $carrierName = null, $totalPrice = null, $transitDays = null, $guaranteedService = null, $highCostDeliveryShipment = null, $interline = null, $nmfcRequired = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentCarrierNotification $carrierNotifications = null)
    {
        $this
            ->setShipmentQuoteId($shipmentQuoteId)
            ->setCarrierSCAC($carrierSCAC)
            ->setCarrierName($carrierName)
            ->setTotalPrice($totalPrice)
            ->setTransitDays($transitDays)
            ->setGuaranteedService($guaranteedService)
            ->setHighCostDeliveryShipment($highCostDeliveryShipment)
            ->setInterline($interline)
            ->setNmfcRequired($nmfcRequired)
            ->setCarrierNotifications($carrierNotifications);
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
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
     * Get carrierSCAC value
     * @return string|null
     */
    public function getCarrierSCAC()
    {
        return $this->carrierSCAC;
    }
    /**
     * Set carrierSCAC value
     * @param string $carrierSCAC
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
     */
    public function setCarrierSCAC($carrierSCAC = null)
    {
        // validation for constraint: string
        if (!is_null($carrierSCAC) && !is_string($carrierSCAC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierSCAC)), __LINE__);
        }
        $this->carrierSCAC = $carrierSCAC;
        return $this;
    }
    /**
     * Get carrierName value
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }
    /**
     * Set carrierName value
     * @param string $carrierName
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
     */
    public function setCarrierName($carrierName = null)
    {
        // validation for constraint: string
        if (!is_null($carrierName) && !is_string($carrierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierName)), __LINE__);
        }
        $this->carrierName = $carrierName;
        return $this;
    }
    /**
     * Get totalPrice value
     * @return string|null
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param string $totalPrice
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
     */
    public function setTotalPrice($totalPrice = null)
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get transitDays value
     * @return string|null
     */
    public function getTransitDays()
    {
        return $this->transitDays;
    }
    /**
     * Set transitDays value
     * @param string $transitDays
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
     */
    public function setTransitDays($transitDays = null)
    {
        // validation for constraint: string
        if (!is_null($transitDays) && !is_string($transitDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transitDays)), __LINE__);
        }
        $this->transitDays = $transitDays;
        return $this;
    }
    /**
     * Get guaranteedService value
     * @return string|null
     */
    public function getGuaranteedService()
    {
        return $this->guaranteedService;
    }
    /**
     * Set guaranteedService value
     * @param string $guaranteedService
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
     */
    public function setGuaranteedService($guaranteedService = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteedService) && !is_string($guaranteedService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteedService)), __LINE__);
        }
        $this->guaranteedService = $guaranteedService;
        return $this;
    }
    /**
     * Get highCostDeliveryShipment value
     * @return string|null
     */
    public function getHighCostDeliveryShipment()
    {
        return $this->highCostDeliveryShipment;
    }
    /**
     * Set highCostDeliveryShipment value
     * @param string $highCostDeliveryShipment
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
     */
    public function setHighCostDeliveryShipment($highCostDeliveryShipment = null)
    {
        // validation for constraint: string
        if (!is_null($highCostDeliveryShipment) && !is_string($highCostDeliveryShipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($highCostDeliveryShipment)), __LINE__);
        }
        $this->highCostDeliveryShipment = $highCostDeliveryShipment;
        return $this;
    }
    /**
     * Get interline value
     * @return string|null
     */
    public function getInterline()
    {
        return $this->interline;
    }
    /**
     * Set interline value
     * @param string $interline
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
     */
    public function setInterline($interline = null)
    {
        // validation for constraint: string
        if (!is_null($interline) && !is_string($interline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interline)), __LINE__);
        }
        $this->interline = $interline;
        return $this;
    }
    /**
     * Get nmfcRequired value
     * @return string|null
     */
    public function getNmfcRequired()
    {
        return $this->nmfcRequired;
    }
    /**
     * Set nmfcRequired value
     * @param string $nmfcRequired
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
     */
    public function setNmfcRequired($nmfcRequired = null)
    {
        // validation for constraint: string
        if (!is_null($nmfcRequired) && !is_string($nmfcRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nmfcRequired)), __LINE__);
        }
        $this->nmfcRequired = $nmfcRequired;
        return $this;
    }
    /**
     * Get carrierNotifications value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentCarrierNotification|null
     */
    public function getCarrierNotifications()
    {
        return $this->carrierNotifications;
    }
    /**
     * Set carrierNotifications value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentCarrierNotification $carrierNotifications
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
     */
    public function setCarrierNotifications(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentCarrierNotification $carrierNotifications = null)
    {
        $this->carrierNotifications = $carrierNotifications;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentQuoteResult
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
