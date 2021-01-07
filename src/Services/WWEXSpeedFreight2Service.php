<?php


namespace ericchew87\WWEXSpeedFreight2PHP\Services;


use ericchew87\WWEXSpeedFreight2PHP\ClassMap;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class WWEXSpeedFreight2Service extends Service {

  public function __construct(array $wsdlOptions = [], $resetSoapClient = TRUE, $mode = 'test') {
    if ($mode === false) $mode = 'test';
    if ($mode === true) $mode = 'live';
    $default_options = [
      AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'SpeedFreightShipmentWS.wsdl',
      AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
    ];
    $options = array_merge($default_options,$wsdlOptions);
    parent::__construct($options, $resetSoapClient);
  }

}
