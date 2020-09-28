<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetNthAssetSourceNameResponse
{

    /**
     * @var string $GetNthAssetSourceNameResult
     */
    protected $GetNthAssetSourceNameResult = null;

    /**
     * @param string $GetNthAssetSourceNameResult
     */
    public function __construct($GetNthAssetSourceNameResult = null)
    {
        $this->GetNthAssetSourceNameResult = $GetNthAssetSourceNameResult;
    }

    /**
     * @return string
     */
    public function getGetNthAssetSourceNameResult()
    {
        return $this->GetNthAssetSourceNameResult;
    }

    /**
     * @param string $GetNthAssetSourceNameResult
     * @return GetNthAssetSourceNameResponse
     */
    public function setGetNthAssetSourceNameResult($GetNthAssetSourceNameResult)
    {
        $this->GetNthAssetSourceNameResult = $GetNthAssetSourceNameResult;
        return $this;
    }

}
