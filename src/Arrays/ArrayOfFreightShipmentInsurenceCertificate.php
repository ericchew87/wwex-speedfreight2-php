<?php

namespace ericchew87\WWEXSpeedFreight2PHP\Arrays;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreightShipmentInsurenceCertificate Arrays
 * @subpackage Arrays
 */
class ArrayOfFreightShipmentInsurenceCertificate extends AbstractStructArrayBase
{
    /**
     * The freightShipmentInsurenceCertificate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate[]
     */
    public $freightShipmentInsurenceCertificate;
    /**
     * Constructor method for ArrayOfFreightShipmentInsurenceCertificate
     * @uses ArrayOfFreightShipmentInsurenceCertificate::setFreightShipmentInsurenceCertificate()
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate[] $freightShipmentInsurenceCertificate
     */
    public function __construct(array $freightShipmentInsurenceCertificate = array())
    {
        $this
            ->setFreightShipmentInsurenceCertificate($freightShipmentInsurenceCertificate);
    }
    /**
     * Get freightShipmentInsurenceCertificate value
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate[]|null
     */
    public function getFreightShipmentInsurenceCertificate()
    {
        return $this->freightShipmentInsurenceCertificate;
    }
    /**
     * Set freightShipmentInsurenceCertificate value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate[] $freightShipmentInsurenceCertificate
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentInsurenceCertificate
     */
    public function setFreightShipmentInsurenceCertificate(array $freightShipmentInsurenceCertificate = array())
    {
        foreach ($freightShipmentInsurenceCertificate as $arrayOfFreightShipmentInsurenceCertificateFreightShipmentInsurenceCertificateItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreightShipmentInsurenceCertificateFreightShipmentInsurenceCertificateItem instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate) {
                throw new \InvalidArgumentException(sprintf('The freightShipmentInsurenceCertificate property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate, "%s" given', is_object($arrayOfFreightShipmentInsurenceCertificateFreightShipmentInsurenceCertificateItem) ? get_class($arrayOfFreightShipmentInsurenceCertificateFreightShipmentInsurenceCertificateItem) : gettype($arrayOfFreightShipmentInsurenceCertificateFreightShipmentInsurenceCertificateItem)), __LINE__);
            }
        }
        $this->freightShipmentInsurenceCertificate = $freightShipmentInsurenceCertificate;
        return $this;
    }
    /**
     * Add item to freightShipmentInsurenceCertificate value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate $item
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentInsurenceCertificate
     */
    public function addToFreightShipmentInsurenceCertificate(\ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate) {
            throw new \InvalidArgumentException(sprintf('The freightShipmentInsurenceCertificate property can only contain items of \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->freightShipmentInsurenceCertificate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ericchew87\WWEXSpeedFreight2PHP\Structs\FreightShipmentInsurenceCertificate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string freightShipmentInsurenceCertificate
     */
    public function getAttributeName()
    {
        return 'freightShipmentInsurenceCertificate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedFreight2PHP\Arrays\ArrayOfFreightShipmentInsurenceCertificate
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
