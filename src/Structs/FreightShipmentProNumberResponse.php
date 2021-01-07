<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentProNumberResponse Structs
 * @subpackage Structs
 */
class FreightShipmentProNumberResponse extends AbstractStructBase
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
     * The freightShipmentProNumberResults
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentProNumberResult
     */
    public $freightShipmentProNumberResults;
    /**
     * Constructor method for FreightShipmentProNumberResponse
     * @uses FreightShipmentProNumberResponse::setResponseStatusCode()
     * @uses FreightShipmentProNumberResponse::setResponseStatusDescription()
     * @uses FreightShipmentProNumberResponse::setErrorDescriptions()
     * @uses FreightShipmentProNumberResponse::setFreightShipmentProNumberResults()
     * @param string $responseStatusCode
     * @param string $responseStatusDescription
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription $errorDescriptions
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentProNumberResult $freightShipmentProNumberResults
     */
    public function __construct($responseStatusCode = null, $responseStatusDescription = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription $errorDescriptions = null, \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentProNumberResult $freightShipmentProNumberResults = null)
    {
        $this
            ->setResponseStatusCode($responseStatusCode)
            ->setResponseStatusDescription($responseStatusDescription)
            ->setErrorDescriptions($errorDescriptions)
            ->setFreightShipmentProNumberResults($freightShipmentProNumberResults);
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse
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
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse
     */
    public function setErrorDescriptions(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentErrorDescription $errorDescriptions = null)
    {
        $this->errorDescriptions = $errorDescriptions;
        return $this;
    }
    /**
     * Get freightShipmentProNumberResults value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentProNumberResult|null
     */
    public function getFreightShipmentProNumberResults()
    {
        return $this->freightShipmentProNumberResults;
    }
    /**
     * Set freightShipmentProNumberResults value
     * @param \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentProNumberResult $freightShipmentProNumberResults
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse
     */
    public function setFreightShipmentProNumberResults(\ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentProNumberResult $freightShipmentProNumberResults = null)
    {
        $this->freightShipmentProNumberResults = $freightShipmentProNumberResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentProNumberResponse
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
