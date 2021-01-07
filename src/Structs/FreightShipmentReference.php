<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentReference Structs
 * @subpackage Structs
 */
class FreightShipmentReference extends AbstractStructBase
{
    /**
     * The referenceDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referenceDescription;
    /**
     * The referenceType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referenceType;
    /**
     * The referencePackageNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referencePackageNumber;
    /**
     * Constructor method for FreightShipmentReference
     * @uses FreightShipmentReference::setReferenceDescription()
     * @uses FreightShipmentReference::setReferenceType()
     * @uses FreightShipmentReference::setReferencePackageNumber()
     * @param string $referenceDescription
     * @param string $referenceType
     * @param string $referencePackageNumber
     */
    public function __construct($referenceDescription = null, $referenceType = null, $referencePackageNumber = null)
    {
        $this
            ->setReferenceDescription($referenceDescription)
            ->setReferenceType($referenceType)
            ->setReferencePackageNumber($referencePackageNumber);
    }
    /**
     * Get referenceDescription value
     * @return string|null
     */
    public function getReferenceDescription()
    {
        return $this->referenceDescription;
    }
    /**
     * Set referenceDescription value
     * @param string $referenceDescription
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference
     */
    public function setReferenceDescription($referenceDescription = null)
    {
        // validation for constraint: string
        if (!is_null($referenceDescription) && !is_string($referenceDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceDescription)), __LINE__);
        }
        $this->referenceDescription = $referenceDescription;
        return $this;
    }
    /**
     * Get referenceType value
     * @return string|null
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }
    /**
     * Set referenceType value
     * @param string $referenceType
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference
     */
    public function setReferenceType($referenceType = null)
    {
        // validation for constraint: string
        if (!is_null($referenceType) && !is_string($referenceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceType)), __LINE__);
        }
        $this->referenceType = $referenceType;
        return $this;
    }
    /**
     * Get referencePackageNumber value
     * @return string|null
     */
    public function getReferencePackageNumber()
    {
        return $this->referencePackageNumber;
    }
    /**
     * Set referencePackageNumber value
     * @param string $referencePackageNumber
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference
     */
    public function setReferencePackageNumber($referencePackageNumber = null)
    {
        // validation for constraint: string
        if (!is_null($referencePackageNumber) && !is_string($referencePackageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referencePackageNumber)), __LINE__);
        }
        $this->referencePackageNumber = $referencePackageNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentReference
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
