<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class SetRecentCampaignIDResponse
{

    /**
     * @var boolean $SetRecentCampaignIDResult
     */
    protected $SetRecentCampaignIDResult = null;

    /**
     * @param boolean $SetRecentCampaignIDResult
     */
    public function __construct($SetRecentCampaignIDResult = null)
    {
        $this->SetRecentCampaignIDResult = $SetRecentCampaignIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetRecentCampaignIDResult()
    {
        return $this->SetRecentCampaignIDResult;
    }

    /**
     * @param boolean $SetRecentCampaignIDResult
     * @return SetRecentCampaignIDResponse
     */
    public function setSetRecentCampaignIDResult($SetRecentCampaignIDResult)
    {
        $this->SetRecentCampaignIDResult = $SetRecentCampaignIDResult;
        return $this;
    }

}
