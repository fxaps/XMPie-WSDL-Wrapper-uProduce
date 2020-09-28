<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

class UnselectSupportedCampaignType
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
     * @var int $inCampaignType
     */
    protected $inCampaignType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param int $inCampaignType
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignType = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inCampaignType = $inCampaignType;
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
     * @return UnselectSupportedCampaignType
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
     * @return UnselectSupportedCampaignType
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return int
     */
    public function getInCampaignType()
    {
        return $this->inCampaignType;
    }

    /**
     * @param int $inCampaignType
     * @return UnselectSupportedCampaignType
     */
    public function setInCampaignType($inCampaignType)
    {
        $this->inCampaignType = $inCampaignType;
        return $this;
    }

}
