<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Job_SSP;

class GetCampaignShortcutInfoResponse
{

    /**
     * @var CampaignShortcutInfo $GetCampaignShortcutInfoResult
     */
    protected $GetCampaignShortcutInfoResult = null;

    /**
     * @param CampaignShortcutInfo $GetCampaignShortcutInfoResult
     */
    public function __construct($GetCampaignShortcutInfoResult = null)
    {
        $this->GetCampaignShortcutInfoResult = $GetCampaignShortcutInfoResult;
    }

    /**
     * @return CampaignShortcutInfo
     */
    public function getGetCampaignShortcutInfoResult()
    {
        return $this->GetCampaignShortcutInfoResult;
    }

    /**
     * @param CampaignShortcutInfo $GetCampaignShortcutInfoResult
     * @return GetCampaignShortcutInfoResponse
     */
    public function setGetCampaignShortcutInfoResult($GetCampaignShortcutInfoResult)
    {
        $this->GetCampaignShortcutInfoResult = $GetCampaignShortcutInfoResult;
        return $this;
    }

}
