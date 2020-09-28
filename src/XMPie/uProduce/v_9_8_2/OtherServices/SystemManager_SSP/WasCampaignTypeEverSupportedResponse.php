<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

class WasCampaignTypeEverSupportedResponse
{

    /**
     * @var boolean $WasCampaignTypeEverSupportedResult
     */
    protected $WasCampaignTypeEverSupportedResult = null;

    /**
     * @param boolean $WasCampaignTypeEverSupportedResult
     */
    public function __construct($WasCampaignTypeEverSupportedResult = null)
    {
        $this->WasCampaignTypeEverSupportedResult = $WasCampaignTypeEverSupportedResult;
    }

    /**
     * @return boolean
     */
    public function getWasCampaignTypeEverSupportedResult()
    {
        return $this->WasCampaignTypeEverSupportedResult;
    }

    /**
     * @param boolean $WasCampaignTypeEverSupportedResult
     * @return WasCampaignTypeEverSupportedResponse
     */
    public function setWasCampaignTypeEverSupportedResult($WasCampaignTypeEverSupportedResult)
    {
        $this->WasCampaignTypeEverSupportedResult = $WasCampaignTypeEverSupportedResult;
        return $this;
    }

}
