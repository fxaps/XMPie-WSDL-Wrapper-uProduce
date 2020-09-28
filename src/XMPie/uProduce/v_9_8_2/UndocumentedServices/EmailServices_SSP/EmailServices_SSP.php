<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\EmailServices_SSP;


use SoapClient;

/**
 * Email Services Web Service.
 */
class EmailServices_SSP extends SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'SendMail' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\SendMail',
        'SendMailResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\SendMailResponse',
        'SetEmailSubscriptionStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\SetEmailSubscriptionStatus',
        'SetEmailSubscriptionStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\SetEmailSubscriptionStatusResponse',
        'GetEmailSubscriptionStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\GetEmailSubscriptionStatus',
        'GetEmailSubscriptionStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\GetEmailSubscriptionStatusResponse',
        'ExportAccountEmailSubscribers' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\ExportAccountEmailSubscribers',
        'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\ArrayOfProperty',
        'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\Property',
        'ExportAccountEmailSubscribersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\ExportAccountEmailSubscribersResponse',
        'ExportCampaignEmailSubscribers' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\ExportCampaignEmailSubscribers',
        'ExportCampaignEmailSubscribersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\ExportCampaignEmailSubscribersResponse',
        'ImportAccountEmailSubscribers' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\ImportAccountEmailSubscribers',
        'ImportAccountEmailSubscribersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\ImportAccountEmailSubscribersResponse',
        'SetAccountEmailSubscriberStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\SetAccountEmailSubscriberStatus',
        'SetAccountEmailSubscriberStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\SetAccountEmailSubscriberStatusResponse',
        'GetAccountEmailSubscriberStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\GetAccountEmailSubscriberStatus',
        'GetAccountEmailSubscriberStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\EmailServices_SSP\\GetAccountEmailSubscriberStatusResponse',
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
     * Set email subscription status from unsubsribe link ADOR.
     *
     * @param SetEmailSubscriptionStatus $parameters
     * @return SetEmailSubscriptionStatusResponse
     */
    public function SetEmailSubscriptionStatus(SetEmailSubscriptionStatus $parameters)
    {
        return $this->__soapCall('SetEmailSubscriptionStatus', array($parameters));
    }

    /**
     * Get email subscription status. Note: This web service is depricated.
     *
     * @param GetEmailSubscriptionStatus $parameters
     * @return GetEmailSubscriptionStatusResponse
     */
    public function GetEmailSubscriptionStatus(GetEmailSubscriptionStatus $parameters)
    {
        return $this->__soapCall('GetEmailSubscriptionStatus', array($parameters));
    }

    /**
     * Export account email subscribers to a file.
     *
     * @param ExportAccountEmailSubscribers $parameters
     * @return ExportAccountEmailSubscribersResponse
     */
    public function ExportAccountEmailSubscribers(ExportAccountEmailSubscribers $parameters)
    {
        return $this->__soapCall('ExportAccountEmailSubscribers', array($parameters));
    }

    /**
     * Export campaign email subscribers to a file.
     *
     * @param ExportCampaignEmailSubscribers $parameters
     * @return ExportCampaignEmailSubscribersResponse
     */
    public function ExportCampaignEmailSubscribers(ExportCampaignEmailSubscribers $parameters)
    {
        return $this->__soapCall('ExportCampaignEmailSubscribers', array($parameters));
    }

    /**
     * Import account email subscribers from a file.
     *
     * @param ImportAccountEmailSubscribers $parameters
     * @return ImportAccountEmailSubscribersResponse
     */
    public function ImportAccountEmailSubscribers(ImportAccountEmailSubscribers $parameters)
    {
        return $this->__soapCall('ImportAccountEmailSubscribers', array($parameters));
    }

    /**
     * Update status of an email subscriber.
     *
     * @param SetAccountEmailSubscriberStatus $parameters
     * @return SetAccountEmailSubscriberStatusResponse
     */
    public function SetAccountEmailSubscriberStatus(SetAccountEmailSubscriberStatus $parameters)
    {
        return $this->__soapCall('SetAccountEmailSubscriberStatus', array($parameters));
    }

    /**
     * Get status of an email subscriber.
     *
     * @param GetAccountEmailSubscriberStatus $parameters
     * @return GetAccountEmailSubscriberStatusResponse
     */
    public function GetAccountEmailSubscriberStatus(GetAccountEmailSubscriberStatus $parameters)
    {
        return $this->__soapCall('GetAccountEmailSubscriberStatus', array($parameters));
    }

}
