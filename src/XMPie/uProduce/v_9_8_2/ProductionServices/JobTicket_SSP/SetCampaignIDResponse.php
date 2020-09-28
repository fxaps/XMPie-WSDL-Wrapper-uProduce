<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetCampaignIDResponse
{

    /**
     * @var boolean $SetCampaignIDResult
     */
    protected $SetCampaignIDResult = null;

    /**
     * @param boolean $SetCampaignIDResult
     */
    public function __construct($SetCampaignIDResult = null)
    {
        $this->SetCampaignIDResult = $SetCampaignIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetCampaignIDResult()
    {
        return $this->SetCampaignIDResult;
    }

    /**
     * @param boolean $SetCampaignIDResult
     * @return SetCampaignIDResponse
     */
    public function setSetCampaignIDResult($SetCampaignIDResult)
    {
        $this->SetCampaignIDResult = $SetCampaignIDResult;
        return $this;
    }

}
