<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Sets the AuthenticationToken SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken $authenticationToken
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAuthenticationToken(\ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken $authenticationToken, $nameSpace = 'http://www.wwexship.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'AuthenticationToken', $authenticationToken, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named quoteSpeedFreightShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : AuthenticationToken
     * - SOAPHeaderNamespaces : http://www.wwexship.com
     * - SOAPHeaderTypes : \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\QuoteSpeedFreightShipment $parameters
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\QuoteSpeedFreightShipmentResponse|bool
     */
    public function quoteSpeedFreightShipment(\ericchew87\WWEXSpeedFreight2PHP\Structs\QuoteSpeedFreightShipment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->quoteSpeedFreightShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named bookSpeedFreightShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : AuthenticationToken
     * - SOAPHeaderNamespaces : http://www.wwexship.com
     * - SOAPHeaderTypes : \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\BookSpeedFreightShipment $parameters
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\BookSpeedFreightShipmentResponse|bool
     */
    public function bookSpeedFreightShipment(\ericchew87\WWEXSpeedFreight2PHP\Structs\BookSpeedFreightShipment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->bookSpeedFreightShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named voidSpeedFreightShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : AuthenticationToken
     * - SOAPHeaderNamespaces : http://www.wwexship.com
     * - SOAPHeaderTypes : \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\VoidSpeedFreightShipment $parameters
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\VoidSpeedFreightShipmentResponse|bool
     */
    public function voidSpeedFreightShipment(\ericchew87\WWEXSpeedFreight2PHP\Structs\VoidSpeedFreightShipment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->voidSpeedFreightShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSpeedFreightShipmentProNumber
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : AuthenticationToken
     * - SOAPHeaderNamespaces : http://www.wwexship.com
     * - SOAPHeaderTypes : \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\GetSpeedFreightShipmentProNumber $parameters
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\GetSpeedFreightShipmentProNumberResponse|bool
     */
    public function getSpeedFreightShipmentProNumber(\ericchew87\WWEXSpeedFreight2PHP\Structs\GetSpeedFreightShipmentProNumber $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getSpeedFreightShipmentProNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\BookSpeedFreightShipmentResponse|\ericchew87\WWEXSpeedFreight2PHP\Structs\GetSpeedFreightShipmentProNumberResponse|\ericchew87\WWEXSpeedFreight2PHP\Structs\QuoteSpeedFreightShipmentResponse|\ericchew87\WWEXSpeedFreight2PHP\Structs\VoidSpeedFreightShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
