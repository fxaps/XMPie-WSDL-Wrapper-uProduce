<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class SendMail
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
     * @var string $inDeliveryProviderID
     */
    protected $inDeliveryProviderID = null;

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
     * @param string $inDeliveryProviderID
     * @param EmailHeaderInfo $inEmailHeaderInfo
     * @param ArrayOfEmailBodyInfo $inEmailBodyInfos
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderID = null, $inEmailHeaderInfo = null, $inEmailBodyInfos = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDeliveryProviderID = $inDeliveryProviderID;
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
     * @return SendMail
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
     * @return SendMail
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDeliveryProviderID()
    {
        return $this->inDeliveryProviderID;
    }

    /**
     * @param string $inDeliveryProviderID
     * @return SendMail
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
        $this->inDeliveryProviderID = $inDeliveryProviderID;
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
     * @return SendMail
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
     * @return SendMail
     */
    public function setInEmailBodyInfos($inEmailBodyInfos)
    {
        $this->inEmailBodyInfos = $inEmailBodyInfos;
        return $this;
    }

}
