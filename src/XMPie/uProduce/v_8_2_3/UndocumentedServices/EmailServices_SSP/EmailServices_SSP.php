<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP;


/**
 * Email Services Web Service.
 */
class EmailServices_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'SendMail' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\EmailServices_SSP\\SendMail',
  'SendMailResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\EmailServices_SSP\\SendMailResponse',
  'SetEmailSubscriptionStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\EmailServices_SSP\\SetEmailSubscriptionStatus',
  'SetEmailSubscriptionStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\EmailServices_SSP\\SetEmailSubscriptionStatusResponse',
  'GetEmailSubscriptionStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\EmailServices_SSP\\GetEmailSubscriptionStatus',
  'GetEmailSubscriptionStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\EmailServices_SSP\\GetEmailSubscriptionStatusResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/EmailServices_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Sends an e-mail. Note: This web service is depricated.
     *
     * @param SendMail $parameters
     * @return SendMailResponse
     */
    public function SendMail(SendMail $parameters)
    {
      return $this->__soapCall('SendMail', array($parameters));
    }

    /**
     * Set email subscription status
     *
     * @param SetEmailSubscriptionStatus $parameters
     * @return SetEmailSubscriptionStatusResponse
     */
    public function SetEmailSubscriptionStatus(SetEmailSubscriptionStatus $parameters)
    {
      return $this->__soapCall('SetEmailSubscriptionStatus', array($parameters));
    }

    /**
     * Get email subscription status
     *
     * @param GetEmailSubscriptionStatus $parameters
     * @return GetEmailSubscriptionStatusResponse
     */
    public function GetEmailSubscriptionStatus(GetEmailSubscriptionStatus $parameters)
    {
      return $this->__soapCall('GetEmailSubscriptionStatus', array($parameters));
    }

}
