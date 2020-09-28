<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

class SelectSupportedCampaignTypeResponse
{

    /**
     * @var boolean $SelectSupportedCampaignTypeResult
     */
    protected $SelectSupportedCampaignTypeResult = null;

    /**
     * @param boolean $SelectSupportedCampaignTypeResult
     */
    public function __construct($SelectSupportedCampaignTypeResult = null)
    {
        $this->SelectSupportedCampaignTypeResult = $SelectSupportedCampaignTypeResult;
    }

    /**
     * @return boolean
     */
    public function getSelectSupportedCampaignTypeResult()
    {
        return $this->SelectSupportedCampaignTypeResult;
    }

    /**
     * @param boolean $SelectSupportedCampaignTypeResult
     * @return SelectSupportedCampaignTypeResponse
     */
    public function setSelectSupportedCampaignTypeResult($SelectSupportedCampaignTypeResult)
    {
        $this->SelectSupportedCampaignTypeResult = $SelectSupportedCampaignTypeResult;
        return $this;
    }

}
