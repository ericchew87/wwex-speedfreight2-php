<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentBookResponse Structs
 * @subpackage Structs
 */
class FreightShipmentBookResponse extends AbstractStructBase
{
    /**
     * The responseStatusCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $responseStatusCode;
    /**
     * The responseStatusDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $responseStatusDescription;
    /**
     * The errorDescriptions
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription
     */
    public $errorDescriptions;
    /**
     * The notifications
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentNotification
     */
    public $notifications;
    /**
     * The freightShipmentBOLNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $freightShipmentBOLNumber;
    /**
     * The freightShipmentBOLLabels
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLLabel
     */
    public $freightShipmentBOLLabels;
    /**
     * The freightShipmentInsuranceCertificateId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $freightShipmentInsuranceCertificateId;
    /**
     * The freightShipmentInsuranceCertificates
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentInsurenceCertificate
     */
    public $freightShipmentInsuranceCertificates;
    /**
     * Constructor method for FreightShipmentBookResponse
     * @uses FreightShipmentBookResponse::setResponseStatusCode()
     * @uses FreightShipmentBookResponse::setResponseStatusDescription()
     * @uses FreightShipmentBookResponse::setErrorDescriptions()
     * @uses FreightShipmentBookResponse::setNotifications()
     * @uses FreightShipmentBookResponse::setFreightShipmentBOLNumber()
     * @uses FreightShipmentBookResponse::setFreightShipmentBOLLabels()
     * @uses FreightShipmentBookResponse::setFreightShipmentInsuranceCertificateId()
     * @uses FreightShipmentBookResponse::setFreightShipmentInsuranceCertificates()
     * @param string $responseStatusCode
     * @param string $responseStatusDescription
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription $errorDescriptions
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentNotification $notifications
     * @param string $freightShipmentBOLNumber
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLLabel $freightShipmentBOLLabels
     * @param string $freightShipmentInsuranceCertificateId
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentInsurenceCertificate $freightShipmentInsuranceCertificates
     */
    public function __construct($responseStatusCode = null, $responseStatusDescription = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription $errorDescriptions = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentNotification $notifications = null, $freightShipmentBOLNumber = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLLabel $freightShipmentBOLLabels = null, $freightShipmentInsuranceCertificateId = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentInsurenceCertificate $freightShipmentInsuranceCertificates = null)
    {
        $this
            ->setResponseStatusCode($responseStatusCode)
            ->setResponseStatusDescription($responseStatusDescription)
            ->setErrorDescriptions($errorDescriptions)
            ->setNotifications($notifications)
            ->setFreightShipmentBOLNumber($freightShipmentBOLNumber)
            ->setFreightShipmentBOLLabels($freightShipmentBOLLabels)
            ->setFreightShipmentInsuranceCertificateId($freightShipmentInsuranceCertificateId)
            ->setFreightShipmentInsuranceCertificates($freightShipmentInsuranceCertificates);
    }
    /**
     * Get responseStatusCode value
     * @return string|null
     */
    public function getResponseStatusCode()
    {
        return $this->responseStatusCode;
    }
    /**
     * Set responseStatusCode value
     * @param string $responseStatusCode
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
     */
    public function setResponseStatusCode($responseStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($responseStatusCode) && !is_string($responseStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseStatusCode)), __LINE__);
        }
        $this->responseStatusCode = $responseStatusCode;
        return $this;
    }
    /**
     * Get responseStatusDescription value
     * @return string|null
     */
    public function getResponseStatusDescription()
    {
        return $this->responseStatusDescription;
    }
    /**
     * Set responseStatusDescription value
     * @param string $responseStatusDescription
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
     */
    public function setResponseStatusDescription($responseStatusDescription = null)
    {
        // validation for constraint: string
        if (!is_null($responseStatusDescription) && !is_string($responseStatusDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseStatusDescription)), __LINE__);
        }
        $this->responseStatusDescription = $responseStatusDescription;
        return $this;
    }
    /**
     * Get errorDescriptions value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription|null
     */
    public function getErrorDescriptions()
    {
        return $this->errorDescriptions;
    }
    /**
     * Set errorDescriptions value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription $errorDescriptions
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
     */
    public function setErrorDescriptions(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription $errorDescriptions = null)
    {
        $this->errorDescriptions = $errorDescriptions;
        return $this;
    }
    /**
     * Get notifications value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentNotification|null
     */
    public function getNotifications()
    {
        return $this->notifications;
    }
    /**
     * Set notifications value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentNotification $notifications
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
     */
    public function setNotifications(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentNotification $notifications = null)
    {
        $this->notifications = $notifications;
        return $this;
    }
    /**
     * Get freightShipmentBOLNumber value
     * @return string|null
     */
    public function getFreightShipmentBOLNumber()
    {
        return $this->freightShipmentBOLNumber;
    }
    /**
     * Set freightShipmentBOLNumber value
     * @param string $freightShipmentBOLNumber
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
     */
    public function setFreightShipmentBOLNumber($freightShipmentBOLNumber = null)
    {
        // validation for constraint: string
        if (!is_null($freightShipmentBOLNumber) && !is_string($freightShipmentBOLNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freightShipmentBOLNumber)), __LINE__);
        }
        $this->freightShipmentBOLNumber = $freightShipmentBOLNumber;
        return $this;
    }
    /**
     * Get freightShipmentBOLLabels value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLLabel|null
     */
    public function getFreightShipmentBOLLabels()
    {
        return $this->freightShipmentBOLLabels;
    }
    /**
     * Set freightShipmentBOLLabels value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLLabel $freightShipmentBOLLabels
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
     */
    public function setFreightShipmentBOLLabels(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentBOLLabel $freightShipmentBOLLabels = null)
    {
        $this->freightShipmentBOLLabels = $freightShipmentBOLLabels;
        return $this;
    }
    /**
     * Get freightShipmentInsuranceCertificateId value
     * @return string|null
     */
    public function getFreightShipmentInsuranceCertificateId()
    {
        return $this->freightShipmentInsuranceCertificateId;
    }
    /**
     * Set freightShipmentInsuranceCertificateId value
     * @param string $freightShipmentInsuranceCertificateId
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
     */
    public function setFreightShipmentInsuranceCertificateId($freightShipmentInsuranceCertificateId = null)
    {
        // validation for constraint: string
        if (!is_null($freightShipmentInsuranceCertificateId) && !is_string($freightShipmentInsuranceCertificateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freightShipmentInsuranceCertificateId)), __LINE__);
        }
        $this->freightShipmentInsuranceCertificateId = $freightShipmentInsuranceCertificateId;
        return $this;
    }
    /**
     * Get freightShipmentInsuranceCertificates value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentInsurenceCertificate|null
     */
    public function getFreightShipmentInsuranceCertificates()
    {
        return $this->freightShipmentInsuranceCertificates;
    }
    /**
     * Set freightShipmentInsuranceCertificates value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentInsurenceCertificate $freightShipmentInsuranceCertificates
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
     */
    public function setFreightShipmentInsuranceCertificates(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentInsurenceCertificate $freightShipmentInsuranceCertificates = null)
    {
        $this->freightShipmentInsuranceCertificates = $freightShipmentInsuranceCertificates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentBookResponse
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
