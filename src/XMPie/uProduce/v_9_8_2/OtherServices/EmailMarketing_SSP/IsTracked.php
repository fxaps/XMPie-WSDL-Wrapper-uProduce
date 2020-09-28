<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class IsTracked
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
     * @var string $inEmailActivityName
     */
    protected $inEmailActivityName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inEmailActivityName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inEmailActivityName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAccountName = $inAccountName;
        $this->inCampaignName = $inCampaignName;
        $this->inEmailActivityName = $inEmailActivityName;
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
     * @return IsTracked
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
     * @return IsTracked
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
     * @return IsTracked
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
     * @return IsTracked
     */
    public function setInCampaignName($inCampaignName)
    {
        $this->inCampaignName = $inCampaignName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInEmailActivityName()
    {
        return $this->inEmailActivityName;
    }

    /**
     * @param string $inEmailActivityName
     * @return IsTracked
     */
    public function setInEmailActivityName($inEmailActivityName)
    {
        $this->inEmailActivityName = $inEmailActivityName;
        return $this;
    }

}
