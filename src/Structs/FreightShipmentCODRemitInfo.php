<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentCODRemitInfo Structs
 * @subpackage Structs
 */
class FreightShipmentCODRemitInfo extends AbstractStructBase
{
    /**
     * The companyName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $companyName;
    /**
     * The streetAddress
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $streetAddress;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $state;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The formOfPayment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $formOfPayment;
    /**
     * Constructor method for FreightShipmentCODRemitInfo
     * @uses FreightShipmentCODRemitInfo::setCompanyName()
     * @uses FreightShipmentCODRemitInfo::setStreetAddress()
     * @uses FreightShipmentCODRemitInfo::setCity()
     * @uses FreightShipmentCODRemitInfo::setState()
     * @uses FreightShipmentCODRemitInfo::setZip()
     * @uses FreightShipmentCODRemitInfo::setCountry()
     * @uses FreightShipmentCODRemitInfo::setFormOfPayment()
     * @param string $companyName
     * @param string $streetAddress
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @param string $formOfPayment
     */
    public function __construct($companyName = null, $streetAddress = null, $city = null, $state = null, $zip = null, $country = null, $formOfPayment = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setStreetAddress($streetAddress)
            ->setCity($city)
            ->setState($state)
            ->setZip($zip)
            ->setCountry($country)
            ->setFormOfPayment($formOfPayment);
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Get streetAddress value
     * @return string|null
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }
    /**
     * Set streetAddress value
     * @param string $streetAddress
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo
     */
    public function setStreetAddress($streetAddress = null)
    {
        // validation for constraint: string
        if (!is_null($streetAddress) && !is_string($streetAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetAddress)), __LINE__);
        }
        $this->streetAddress = $streetAddress;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param string $zip
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zip)), __LINE__);
        }
        $this->zip = $zip;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get formOfPayment value
     * @return string|null
     */
    public function getFormOfPayment()
    {
        return $this->formOfPayment;
    }
    /**
     * Set formOfPayment value
     * @param string $formOfPayment
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo
     */
    public function setFormOfPayment($formOfPayment = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPayment) && !is_string($formOfPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfPayment)), __LINE__);
        }
        $this->formOfPayment = $formOfPayment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentCODRemitInfo
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
