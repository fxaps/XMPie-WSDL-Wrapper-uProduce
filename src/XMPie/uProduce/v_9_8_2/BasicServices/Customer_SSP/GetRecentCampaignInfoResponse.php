<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetRecentCampaignInfoResponse
{

    /**
     * @var CampaignShortcutInfo $GetRecentCampaignInfoResult
     */
    protected $GetRecentCampaignInfoResult = null;

    /**
     * @param CampaignShortcutInfo $GetRecentCampaignInfoResult
     */
    public function __construct($GetRecentCampaignInfoResult = null)
    {
        $this->GetRecentCampaignInfoResult = $GetRecentCampaignInfoResult;
    }

    /**
     * @return CampaignShortcutInfo
     */
    public function getGetRecentCampaignInfoResult()
    {
        return $this->GetRecentCampaignInfoResult;
    }

    /**
     * @param CampaignShortcutInfo $GetRecentCampaignInfoResult
     * @return GetRecentCampaignInfoResponse
     */
    public function setGetRecentCampaignInfoResult($GetRecentCampaignInfoResult)
    {
        $this->GetRecentCampaignInfoResult = $GetRecentCampaignInfoResult;
        return $this;
    }

}
