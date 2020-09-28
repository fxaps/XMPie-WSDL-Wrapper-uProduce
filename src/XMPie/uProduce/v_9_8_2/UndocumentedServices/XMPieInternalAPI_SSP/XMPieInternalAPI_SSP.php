<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\XMPieInternalAPI_SSP;


use SoapClient;

/**
 * Internal API Web Service.
 */
class XMPieInternalAPI_SSP extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetIDByGUID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\XMPieInternalAPI_SSP\\GetIDByGUID',
        'GetIDByGUIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\XMPieInternalAPI_SSP\\GetIDByGUIDResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @throws SoapFault
     */
    public function __construct(array $options = array(), $wsdl = null)
    {

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'http://localhost/xmpiewsapi/XMPieInternalAPI_SSP.asmx?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns object's GUID by its ID.
     *
     * @param GetIDByGUID $parameters
     * @return GetIDByGUIDResponse
     */
    public function GetIDByGUID(GetIDByGUID $parameters)
    {
        return $this->__soapCall('GetIDByGUID', array($parameters));
    }

}
