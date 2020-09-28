<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class GetCorespondingJobID
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
     * @var boolean $inIncludingSuspendedJobs
     */
    protected $inIncludingSuspendedJobs = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inICPName
     * @param boolean $inIncludingSuspendedJobs
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inICPName = null, $inIncludingSuspendedJobs = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAccountName = $inAccountName;
        $this->inCampaignName = $inCampaignName;
        $this->inICPName = $inICPName;
        $this->inIncludingSuspendedJobs = $inIncludingSuspendedJobs;
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
     * @return GetCorespondingJobID
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
     * @return GetCorespondingJobID
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
     * @return GetCorespondingJobID
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
     * @return GetCorespondingJobID
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
     * @return GetCorespondingJobID
     */
    public function setInICPName($inICPName)
    {
        $this->inICPName = $inICPName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludingSuspendedJobs()
    {
        return $this->inIncludingSuspendedJobs;
    }

    /**
     * @param boolean $inIncludingSuspendedJobs
     * @return GetCorespondingJobID
     */
    public function setInIncludingSuspendedJobs($inIncludingSuspendedJobs)
    {
        $this->inIncludingSuspendedJobs = $inIncludingSuspendedJobs;
        return $this;
    }

}
