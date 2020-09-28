<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\MessagesUtils_SSP;


/**
 * Messages Utils Web Service.
 */
class MessagesUtils_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'DecodeMessage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\MessagesUtils_SSP\\DecodeMessage',
  'DecodeMessageResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\MessagesUtils_SSP\\DecodeMessageResponse',
  'DecodeContext' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\MessagesUtils_SSP\\DecodeContext',
  'DecodeContextResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\MessagesUtils_SSP\\DecodeContextResponse',
  'DecodeSeverity' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\MessagesUtils_SSP\\DecodeSeverity',
  'DecodeSeverityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\MessagesUtils_SSP\\DecodeSeverityResponse',
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
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/xmpiewsapi/MessagesUtils_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Decode message
     *
     * @param DecodeMessage $parameters
     * @return DecodeMessageResponse
     */
    public function DecodeMessage(DecodeMessage $parameters)
    {
      return $this->__soapCall('DecodeMessage', array($parameters));
    }

    /**
     * Decode Context.
     *
     * @param DecodeContext $parameters
     * @return DecodeContextResponse
     */
    public function DecodeContext(DecodeContext $parameters)
    {
      return $this->__soapCall('DecodeContext', array($parameters));
    }

    /**
     * Decode Severity.
     *
     * @param DecodeSeverity $parameters
     * @return DecodeSeverityResponse
     */
    public function DecodeSeverity(DecodeSeverity $parameters)
    {
      return $this->__soapCall('DecodeSeverity', array($parameters));
    }

}
