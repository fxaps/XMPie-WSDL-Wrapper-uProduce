<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetConnectivityAssetsResponse
{

    /**
     * @var boolean $GetConnectivityAssetsResult
     */
    protected $GetConnectivityAssetsResult = null;

    /**
     * @param boolean $GetConnectivityAssetsResult
     */
    public function __construct($GetConnectivityAssetsResult = null)
    {
        $this->GetConnectivityAssetsResult = $GetConnectivityAssetsResult;
    }

    /**
     * @return boolean
     */
    public function getGetConnectivityAssetsResult()
    {
        return $this->GetConnectivityAssetsResult;
    }

    /**
     * @param boolean $GetConnectivityAssetsResult
     * @return GetConnectivityAssetsResponse
     */
    public function setGetConnectivityAssetsResult($GetConnectivityAssetsResult)
    {
        $this->GetConnectivityAssetsResult = $GetConnectivityAssetsResult;
        return $this;
    }

}
