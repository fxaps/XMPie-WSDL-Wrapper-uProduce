<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

class GetCampaignIDResponse
{

    /**
     * @var string $GetCampaignIDResult
     */
    protected $GetCampaignIDResult = null;

    /**
     * @param string $GetCampaignIDResult
     */
    public function __construct($GetCampaignIDResult = null)
    {
      $this->GetCampaignIDResult = $GetCampaignIDResult;
    }

    /**
     * @return string
     */
    public function getGetCampaignIDResult()
    {
      return $this->GetCampaignIDResult;
    }

    /**
     * @param string $GetCampaignIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\GetCampaignIDResponse
     */
    public function setGetCampaignIDResult($GetCampaignIDResult)
    {
      $this->GetCampaignIDResult = $GetCampaignIDResult;
      return $this;
    }

}
