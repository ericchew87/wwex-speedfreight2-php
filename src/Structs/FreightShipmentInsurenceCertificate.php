<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentInsurenceCertificate Structs
 * @subpackage Structs
 */
class FreightShipmentInsurenceCertificate extends AbstractStructBase
{
    /**
     * The base64InsuranceCertificate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $base64InsuranceCertificate;
    /**
     * Constructor method for FreightShipmentInsurenceCertificate
     * @uses FreightShipmentInsurenceCertificate::setBase64InsuranceCertificate()
     * @param string $base64InsuranceCertificate
     */
    public function __construct($base64InsuranceCertificate = null)
    {
        $this
            ->setBase64InsuranceCertificate($base64InsuranceCertificate);
    }
    /**
     * Get base64InsuranceCertificate value
     * @return string|null
     */
    public function getBase64InsuranceCertificate()
    {
        return $this->base64InsuranceCertificate;
    }
    /**
     * Set base64InsuranceCertificate value
     * @param string $base64InsuranceCertificate
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate
     */
    public function setBase64InsuranceCertificate($base64InsuranceCertificate = null)
    {
        // validation for constraint: string
        if (!is_null($base64InsuranceCertificate) && !is_string($base64InsuranceCertificate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($base64InsuranceCertificate)), __LINE__);
        }
        $this->base64InsuranceCertificate = $base64InsuranceCertificate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate
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
