<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentSenderDetail Structs
 * @subpackage Structs
 */
class FreightShipmentSenderDetail extends AbstractStructBase
{
    /**
     * The senderCompanyName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderCompanyName;
    /**
     * The senderAddressLine1
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderAddressLine1;
    /**
     * The senderAddressLine2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderAddressLine2;
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
     * The senderPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderPhone;
    /**
     * The senderContact
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderContact;
    /**
     * The emailBOLToSender
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $emailBOLToSender;
    /**
     * The senderEmailAddess
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderEmailAddess;
    /**
     * Constructor method for FreightShipmentSenderDetail
     * @uses FreightShipmentSenderDetail::setSenderCompanyName()
     * @uses FreightShipmentSenderDetail::setSenderAddressLine1()
     * @uses FreightShipmentSenderDetail::setSenderAddressLine2()
     * @uses FreightShipmentSenderDetail::setSenderCity()
     * @uses FreightShipmentSenderDetail::setSenderState()
     * @uses FreightShipmentSenderDetail::setSenderZip()
     * @uses FreightShipmentSenderDetail::setSenderCountryCode()
     * @uses FreightShipmentSenderDetail::setSenderPhone()
     * @uses FreightShipmentSenderDetail::setSenderContact()
     * @uses FreightShipmentSenderDetail::setEmailBOLToSender()
     * @uses FreightShipmentSenderDetail::setSenderEmailAddess()
     * @param string $senderCompanyName
     * @param string $senderAddressLine1
     * @param string $senderAddressLine2
     * @param string $senderCity
     * @param string $senderState
     * @param string $senderZip
     * @param string $senderCountryCode
     * @param string $senderPhone
     * @param string $senderContact
     * @param string $emailBOLToSender
     * @param string $senderEmailAddess
     */
    public function __construct($senderCompanyName = null, $senderAddressLine1 = null, $senderAddressLine2 = null, $senderCity = null, $senderState = null, $senderZip = null, $senderCountryCode = null, $senderPhone = null, $senderContact = null, $emailBOLToSender = null, $senderEmailAddess = null)
    {
        $this
            ->setSenderCompanyName($senderCompanyName)
            ->setSenderAddressLine1($senderAddressLine1)
            ->setSenderAddressLine2($senderAddressLine2)
            ->setSenderCity($senderCity)
            ->setSenderState($senderState)
            ->setSenderZip($senderZip)
            ->setSenderCountryCode($senderCountryCode)
            ->setSenderPhone($senderPhone)
            ->setSenderContact($senderContact)
            ->setEmailBOLToSender($emailBOLToSender)
            ->setSenderEmailAddess($senderEmailAddess);
    }
    /**
     * Get senderCompanyName value
     * @return string|null
     */
    public function getSenderCompanyName()
    {
        return $this->senderCompanyName;
    }
    /**
     * Set senderCompanyName value
     * @param string $senderCompanyName
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
     */
    public function setSenderCompanyName($senderCompanyName = null)
    {
        // validation for constraint: string
        if (!is_null($senderCompanyName) && !is_string($senderCompanyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderCompanyName)), __LINE__);
        }
        $this->senderCompanyName = $senderCompanyName;
        return $this;
    }
    /**
     * Get senderAddressLine1 value
     * @return string|null
     */
    public function getSenderAddressLine1()
    {
        return $this->senderAddressLine1;
    }
    /**
     * Set senderAddressLine1 value
     * @param string $senderAddressLine1
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
     */
    public function setSenderAddressLine1($senderAddressLine1 = null)
    {
        // validation for constraint: string
        if (!is_null($senderAddressLine1) && !is_string($senderAddressLine1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderAddressLine1)), __LINE__);
        }
        $this->senderAddressLine1 = $senderAddressLine1;
        return $this;
    }
    /**
     * Get senderAddressLine2 value
     * @return string|null
     */
    public function getSenderAddressLine2()
    {
        return $this->senderAddressLine2;
    }
    /**
     * Set senderAddressLine2 value
     * @param string $senderAddressLine2
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
     */
    public function setSenderAddressLine2($senderAddressLine2 = null)
    {
        // validation for constraint: string
        if (!is_null($senderAddressLine2) && !is_string($senderAddressLine2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderAddressLine2)), __LINE__);
        }
        $this->senderAddressLine2 = $senderAddressLine2;
        return $this;
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
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
     * Get senderPhone value
     * @return string|null
     */
    public function getSenderPhone()
    {
        return $this->senderPhone;
    }
    /**
     * Set senderPhone value
     * @param string $senderPhone
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
     */
    public function setSenderPhone($senderPhone = null)
    {
        // validation for constraint: string
        if (!is_null($senderPhone) && !is_string($senderPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderPhone)), __LINE__);
        }
        $this->senderPhone = $senderPhone;
        return $this;
    }
    /**
     * Get senderContact value
     * @return string|null
     */
    public function getSenderContact()
    {
        return $this->senderContact;
    }
    /**
     * Set senderContact value
     * @param string $senderContact
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
     */
    public function setSenderContact($senderContact = null)
    {
        // validation for constraint: string
        if (!is_null($senderContact) && !is_string($senderContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderContact)), __LINE__);
        }
        $this->senderContact = $senderContact;
        return $this;
    }
    /**
     * Get emailBOLToSender value
     * @return string|null
     */
    public function getEmailBOLToSender()
    {
        return $this->emailBOLToSender;
    }
    /**
     * Set emailBOLToSender value
     * @param string $emailBOLToSender
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
     */
    public function setEmailBOLToSender($emailBOLToSender = null)
    {
        // validation for constraint: string
        if (!is_null($emailBOLToSender) && !is_string($emailBOLToSender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailBOLToSender)), __LINE__);
        }
        $this->emailBOLToSender = $emailBOLToSender;
        return $this;
    }
    /**
     * Get senderEmailAddess value
     * @return string|null
     */
    public function getSenderEmailAddess()
    {
        return $this->senderEmailAddess;
    }
    /**
     * Set senderEmailAddess value
     * @param string $senderEmailAddess
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
     */
    public function setSenderEmailAddess($senderEmailAddess = null)
    {
        // validation for constraint: string
        if (!is_null($senderEmailAddess) && !is_string($senderEmailAddess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderEmailAddess)), __LINE__);
        }
        $this->senderEmailAddess = $senderEmailAddess;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentSenderDetail
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
