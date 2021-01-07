<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticationToken Structs
 * Meta informations extracted from the WSDL
 * - maxOccurs: 1
 * - type: impl:AuthenticationToken
 * @subpackage Structs
 */
class AuthenticationToken extends AbstractStructBase
{
    /**
     * The loginId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $loginId;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The licenseKey
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $licenseKey;
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $accountNumber;
    /**
     * Constructor method for AuthenticationToken
     * @uses AuthenticationToken::setLoginId()
     * @uses AuthenticationToken::setPassword()
     * @uses AuthenticationToken::setLicenseKey()
     * @uses AuthenticationToken::setAccountNumber()
     * @param string $loginId
     * @param string $password
     * @param string $licenseKey
     * @param string $accountNumber
     */
    public function __construct($loginId = null, $password = null, $licenseKey = null, $accountNumber = null)
    {
        $this
            ->setLoginId($loginId)
            ->setPassword($password)
            ->setLicenseKey($licenseKey)
            ->setAccountNumber($accountNumber);
    }
    /**
     * Get loginId value
     * @return string|null
     */
    public function getLoginId()
    {
        return $this->loginId;
    }
    /**
     * Set loginId value
     * @param string $loginId
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken
     */
    public function setLoginId($loginId = null)
    {
        // validation for constraint: string
        if (!is_null($loginId) && !is_string($loginId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loginId)), __LINE__);
        }
        $this->loginId = $loginId;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get licenseKey value
     * @return string|null
     */
    public function getLicenseKey()
    {
        return $this->licenseKey;
    }
    /**
     * Set licenseKey value
     * @param string $licenseKey
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken
     */
    public function setLicenseKey($licenseKey = null)
    {
        // validation for constraint: string
        if (!is_null($licenseKey) && !is_string($licenseKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($licenseKey)), __LINE__);
        }
        $this->licenseKey = $licenseKey;
        return $this;
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\AuthenticationToken
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
