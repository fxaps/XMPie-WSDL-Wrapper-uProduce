<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class SendMailByProviderInfo
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var EmailProviderInfo $inDeliveryProviderInfo
     */
    protected $inDeliveryProviderInfo = null;

    /**
     * @var EmailHeaderInfo $inEmailHeaderInfo
     */
    protected $inEmailHeaderInfo = null;

    /**
     * @var ArrayOfEmailBodyInfo $inEmailBodyInfos
     */
    protected $inEmailBodyInfos = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param EmailProviderInfo $inDeliveryProviderInfo
     * @param EmailHeaderInfo $inEmailHeaderInfo
     * @param ArrayOfEmailBodyInfo $inEmailBodyInfos
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderInfo = null, $inEmailHeaderInfo = null, $inEmailBodyInfos = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDeliveryProviderInfo = $inDeliveryProviderInfo;
        $this->inEmailHeaderInfo = $inEmailHeaderInfo;
        $this->inEmailBodyInfos = $inEmailBodyInfos;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
        return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return SendMailByProviderInfo
     */
    public function setInUsername($inUsername)
    {
        $this->inUsername = $inUsername;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
        return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return SendMailByProviderInfo
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return EmailProviderInfo
     */
    public function getInDeliveryProviderInfo()
    {
        return $this->inDeliveryProviderInfo;
    }

    /**
     * @param EmailProviderInfo $inDeliveryProviderInfo
     * @return SendMailByProviderInfo
     */
    public function setInDeliveryProviderInfo($inDeliveryProviderInfo)
    {
        $this->inDeliveryProviderInfo = $inDeliveryProviderInfo;
        return $this;
    }

    /**
     * @return EmailHeaderInfo
     */
    public function getInEmailHeaderInfo()
    {
        return $this->inEmailHeaderInfo;
    }

    /**
     * @param EmailHeaderInfo $inEmailHeaderInfo
     * @return SendMailByProviderInfo
     */
    public function setInEmailHeaderInfo($inEmailHeaderInfo)
    {
        $this->inEmailHeaderInfo = $inEmailHeaderInfo;
        return $this;
    }

    /**
     * @return ArrayOfEmailBodyInfo
     */
    public function getInEmailBodyInfos()
    {
        return $this->inEmailBodyInfos;
    }

    /**
     * @param ArrayOfEmailBodyInfo $inEmailBodyInfos
     * @return SendMailByProviderInfo
     */
    public function setInEmailBodyInfos($inEmailBodyInfos)
    {
        $this->inEmailBodyInfos = $inEmailBodyInfos;
        return $this;
    }

}
