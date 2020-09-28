<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetResolveAssetsResponse
{

    /**
     * @var boolean $GetResolveAssetsResult
     */
    protected $GetResolveAssetsResult = null;

    /**
     * @param boolean $GetResolveAssetsResult
     */
    public function __construct($GetResolveAssetsResult = null)
    {
        $this->GetResolveAssetsResult = $GetResolveAssetsResult;
    }

    /**
     * @return boolean
     */
    public function getGetResolveAssetsResult()
    {
        return $this->GetResolveAssetsResult;
    }

    /**
     * @param boolean $GetResolveAssetsResult
     * @return GetResolveAssetsResponse
     */
    public function setGetResolveAssetsResult($GetResolveAssetsResult)
    {
        $this->GetResolveAssetsResult = $GetResolveAssetsResult;
        return $this;
    }

}
