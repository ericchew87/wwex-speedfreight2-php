<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentReceiverDetail Structs
 * @subpackage Structs
 */
class FreightShipmentReceiverDetail extends AbstractStructBase
{
    /**
     * The receiverCompanyName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverCompanyName;
    /**
     * The receiverAddressLine1
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverAddressLine1;
    /**
     * The receiverAddressLine2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverAddressLine2;
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
     * The receiverPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverPhone;
    /**
     * The receiverContact
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverContact;
    /**
     * The emailBOLToReceiver
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $emailBOLToReceiver;
    /**
     * The receiverEmailAddess
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverEmailAddess;
    /**
     * The billToReceiver
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billToReceiver;
    /**
     * The receiverAccountNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receiverAccountNumber;
    /**
     * Constructor method for FreightShipmentReceiverDetail
     * @uses FreightShipmentReceiverDetail::setReceiverCompanyName()
     * @uses FreightShipmentReceiverDetail::setReceiverAddressLine1()
     * @uses FreightShipmentReceiverDetail::setReceiverAddressLine2()
     * @uses FreightShipmentReceiverDetail::setReceiverCity()
     * @uses FreightShipmentReceiverDetail::setReceiverState()
     * @uses FreightShipmentReceiverDetail::setReceiverZip()
     * @uses FreightShipmentReceiverDetail::setReceiverCountryCode()
     * @uses FreightShipmentReceiverDetail::setReceiverPhone()
     * @uses FreightShipmentReceiverDetail::setReceiverContact()
     * @uses FreightShipmentReceiverDetail::setEmailBOLToReceiver()
     * @uses FreightShipmentReceiverDetail::setReceiverEmailAddess()
     * @uses FreightShipmentReceiverDetail::setBillToReceiver()
     * @uses FreightShipmentReceiverDetail::setReceiverAccountNumber()
     * @param string $receiverCompanyName
     * @param string $receiverAddressLine1
     * @param string $receiverAddressLine2
     * @param string $receiverCity
     * @param string $receiverState
     * @param string $receiverZip
     * @param string $receiverCountryCode
     * @param string $receiverPhone
     * @param string $receiverContact
     * @param string $emailBOLToReceiver
     * @param string $receiverEmailAddess
     * @param string $billToReceiver
     * @param string $receiverAccountNumber
     */
    public function __construct($receiverCompanyName = null, $receiverAddressLine1 = null, $receiverAddressLine2 = null, $receiverCity = null, $receiverState = null, $receiverZip = null, $receiverCountryCode = null, $receiverPhone = null, $receiverContact = null, $emailBOLToReceiver = null, $receiverEmailAddess = null, $billToReceiver = null, $receiverAccountNumber = null)
    {
        $this
            ->setReceiverCompanyName($receiverCompanyName)
            ->setReceiverAddressLine1($receiverAddressLine1)
            ->setReceiverAddressLine2($receiverAddressLine2)
            ->setReceiverCity($receiverCity)
            ->setReceiverState($receiverState)
            ->setReceiverZip($receiverZip)
            ->setReceiverCountryCode($receiverCountryCode)
            ->setReceiverPhone($receiverPhone)
            ->setReceiverContact($receiverContact)
            ->setEmailBOLToReceiver($emailBOLToReceiver)
            ->setReceiverEmailAddess($receiverEmailAddess)
            ->setBillToReceiver($billToReceiver)
            ->setReceiverAccountNumber($receiverAccountNumber);
    }
    /**
     * Get receiverCompanyName value
     * @return string|null
     */
    public function getReceiverCompanyName()
    {
        return $this->receiverCompanyName;
    }
    /**
     * Set receiverCompanyName value
     * @param string $receiverCompanyName
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public function setReceiverCompanyName($receiverCompanyName = null)
    {
        // validation for constraint: string
        if (!is_null($receiverCompanyName) && !is_string($receiverCompanyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverCompanyName)), __LINE__);
        }
        $this->receiverCompanyName = $receiverCompanyName;
        return $this;
    }
    /**
     * Get receiverAddressLine1 value
     * @return string|null
     */
    public function getReceiverAddressLine1()
    {
        return $this->receiverAddressLine1;
    }
    /**
     * Set receiverAddressLine1 value
     * @param string $receiverAddressLine1
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public function setReceiverAddressLine1($receiverAddressLine1 = null)
    {
        // validation for constraint: string
        if (!is_null($receiverAddressLine1) && !is_string($receiverAddressLine1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverAddressLine1)), __LINE__);
        }
        $this->receiverAddressLine1 = $receiverAddressLine1;
        return $this;
    }
    /**
     * Get receiverAddressLine2 value
     * @return string|null
     */
    public function getReceiverAddressLine2()
    {
        return $this->receiverAddressLine2;
    }
    /**
     * Set receiverAddressLine2 value
     * @param string $receiverAddressLine2
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public function setReceiverAddressLine2($receiverAddressLine2 = null)
    {
        // validation for constraint: string
        if (!is_null($receiverAddressLine2) && !is_string($receiverAddressLine2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverAddressLine2)), __LINE__);
        }
        $this->receiverAddressLine2 = $receiverAddressLine2;
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
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
     * Get receiverPhone value
     * @return string|null
     */
    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }
    /**
     * Set receiverPhone value
     * @param string $receiverPhone
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public function setReceiverPhone($receiverPhone = null)
    {
        // validation for constraint: string
        if (!is_null($receiverPhone) && !is_string($receiverPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverPhone)), __LINE__);
        }
        $this->receiverPhone = $receiverPhone;
        return $this;
    }
    /**
     * Get receiverContact value
     * @return string|null
     */
    public function getReceiverContact()
    {
        return $this->receiverContact;
    }
    /**
     * Set receiverContact value
     * @param string $receiverContact
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public function setReceiverContact($receiverContact = null)
    {
        // validation for constraint: string
        if (!is_null($receiverContact) && !is_string($receiverContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverContact)), __LINE__);
        }
        $this->receiverContact = $receiverContact;
        return $this;
    }
    /**
     * Get emailBOLToReceiver value
     * @return string|null
     */
    public function getEmailBOLToReceiver()
    {
        return $this->emailBOLToReceiver;
    }
    /**
     * Set emailBOLToReceiver value
     * @param string $emailBOLToReceiver
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public function setEmailBOLToReceiver($emailBOLToReceiver = null)
    {
        // validation for constraint: string
        if (!is_null($emailBOLToReceiver) && !is_string($emailBOLToReceiver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailBOLToReceiver)), __LINE__);
        }
        $this->emailBOLToReceiver = $emailBOLToReceiver;
        return $this;
    }
    /**
     * Get receiverEmailAddess value
     * @return string|null
     */
    public function getReceiverEmailAddess()
    {
        return $this->receiverEmailAddess;
    }
    /**
     * Set receiverEmailAddess value
     * @param string $receiverEmailAddess
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public function setReceiverEmailAddess($receiverEmailAddess = null)
    {
        // validation for constraint: string
        if (!is_null($receiverEmailAddess) && !is_string($receiverEmailAddess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverEmailAddess)), __LINE__);
        }
        $this->receiverEmailAddess = $receiverEmailAddess;
        return $this;
    }
    /**
     * Get billToReceiver value
     * @return string|null
     */
    public function getBillToReceiver()
    {
        return $this->billToReceiver;
    }
    /**
     * Set billToReceiver value
     * @param string $billToReceiver
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public function setBillToReceiver($billToReceiver = null)
    {
        // validation for constraint: string
        if (!is_null($billToReceiver) && !is_string($billToReceiver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billToReceiver)), __LINE__);
        }
        $this->billToReceiver = $billToReceiver;
        return $this;
    }
    /**
     * Get receiverAccountNumber value
     * @return string|null
     */
    public function getReceiverAccountNumber()
    {
        return $this->receiverAccountNumber;
    }
    /**
     * Set receiverAccountNumber value
     * @param string $receiverAccountNumber
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
     */
    public function setReceiverAccountNumber($receiverAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($receiverAccountNumber) && !is_string($receiverAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverAccountNumber)), __LINE__);
        }
        $this->receiverAccountNumber = $receiverAccountNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReceiverDetail
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
