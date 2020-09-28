<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class IsExist
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
     * @var string $inAccountName
     */
    protected $inAccountName = null;

    /**
     * @var string $inCampaignName
     */
    protected $inCampaignName = null;

    /**
     * @var string $inICPName
     */
    protected $inICPName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inICPName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inICPName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAccountName = $inAccountName;
        $this->inCampaignName = $inCampaignName;
        $this->inICPName = $inICPName;
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
     * @return IsExist
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
     * @return IsExist
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInAccountName()
    {
        return $this->inAccountName;
    }

    /**
     * @param string $inAccountName
     * @return IsExist
     */
    public function setInAccountName($inAccountName)
    {
        $this->inAccountName = $inAccountName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignName()
    {
        return $this->inCampaignName;
    }

    /**
     * @param string $inCampaignName
     * @return IsExist
     */
    public function setInCampaignName($inCampaignName)
    {
        $this->inCampaignName = $inCampaignName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInICPName()
    {
        return $this->inICPName;
    }

    /**
     * @param string $inICPName
     * @return IsExist
     */
    public function setInICPName($inICPName)
    {
        $this->inICPName = $inICPName;
        return $this;
    }

}
