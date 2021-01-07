<?php

namespace ericchew87\WWEXSpeedFreight2PHP;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'AuthenticationToken' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\AuthenticationToken',
            'quoteSpeedFreightShipment' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\QuoteSpeedFreightShipment',
            'WSLineItemHazmatInfo' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\WSLineItemHazmatInfo',
            'WSLineItem' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\WSLineItem',
            'ArrayOfWSLineItem' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfWSLineItem',
            'WSHandlingUnit' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\WSHandlingUnit',
            'ArrayOfWSHandlingUnit' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfWSHandlingUnit',
            'FreightShipmentCommodityDetails' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentCommodityDetails',
            'FreightShipmentInsuranceDetail' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentInsuranceDetail',
            'FreightShipmentQuoteRequest' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentQuoteRequest',
            'quoteSpeedFreightShipmentResponse' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\QuoteSpeedFreightShipmentResponse',
            'FreightShipmentErrorDescription' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentErrorDescription',
            'ArrayOfFreightShipmentErrorDescription' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentErrorDescription',
            'FreightShipmentCarrierNotification' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentCarrierNotification',
            'ArrayOfFreightShipmentCarrierNotification' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentCarrierNotification',
            'FreightShipmentQuoteResult' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentQuoteResult',
            'ArrayOfFreightShipmentQuoteResult' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentQuoteResult',
            'FreightShipmentNotification' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentNotification',
            'ArrayOfFreightShipmentNotification' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentNotification',
            'FreightShipmentQuoteResponse' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentQuoteResponse',
            'bookSpeedFreightShipment' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\BookSpeedFreightShipment',
            'FreightShipmentAddressLabel' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentAddressLabel',
            'FreightShipmentCODRemitInfo' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentCODRemitInfo',
            'FreightShipmentInsuranceDescription' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentInsuranceDescription',
            'FreightShipmentSenderDetail' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentSenderDetail',
            'FreightShipmentReceiverDetail' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentReceiverDetail',
            'FreightShipmentReference' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentReference',
            'ArrayOfFreightShipmentReference' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentReference',
            'FreightShipmentBookRequest' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentBookRequest',
            'bookSpeedFreightShipmentResponse' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\BookSpeedFreightShipmentResponse',
            'FreightShipmentBOLLabel' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentBOLLabel',
            'ArrayOfFreightShipmentBOLLabel' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentBOLLabel',
            'FreightShipmentInsurenceCertificate' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentInsurenceCertificate',
            'ArrayOfFreightShipmentInsurenceCertificate' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentInsurenceCertificate',
            'FreightShipmentBookResponse' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentBookResponse',
            'voidSpeedFreightShipment' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\VoidSpeedFreightShipment',
            'ArrayOfFreightShipmentBOLNumber' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentBOLNumber',
            'FreightShipmentVoidRequest' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentVoidRequest',
            'voidSpeedFreightShipmentResponse' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\VoidSpeedFreightShipmentResponse',
            'FreightShipmentVoidResult' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentVoidResult',
            'ArrayOfFreightShipmentVoidResult' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentVoidResult',
            'FreightShipmentVoidResponse' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentVoidResponse',
            'getSpeedFreightShipmentProNumber' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\GetSpeedFreightShipmentProNumber',
            'FreightShipmentProNumberRequest' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentProNumberRequest',
            'getSpeedFreightShipmentProNumberResponse' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\GetSpeedFreightShipmentProNumberResponse',
            'FreightShipmentProNumberResult' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentProNumberResult',
            'ArrayOfFreightShipmentProNumberResult' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Arrays\\ArrayOfFreightShipmentProNumberResult',
            'FreightShipmentProNumberResponse' => '\\ericchew87\\WWEXSpeedFreight2PHP\\Structs\\FreightShipmentProNumberResponse',
        );
    }
}
