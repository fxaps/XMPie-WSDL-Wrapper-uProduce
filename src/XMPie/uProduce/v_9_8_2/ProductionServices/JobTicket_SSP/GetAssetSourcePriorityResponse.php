<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetAssetSourcePriorityResponse
{

    /**
     * @var int $GetAssetSourcePriorityResult
     */
    protected $GetAssetSourcePriorityResult = null;

    /**
     * @param int $GetAssetSourcePriorityResult
     */
    public function __construct($GetAssetSourcePriorityResult = null)
    {
        $this->GetAssetSourcePriorityResult = $GetAssetSourcePriorityResult;
    }

    /**
     * @return int
     */
    public function getGetAssetSourcePriorityResult()
    {
        return $this->GetAssetSourcePriorityResult;
    }

    /**
     * @param int $GetAssetSourcePriorityResult
     * @return GetAssetSourcePriorityResponse
     */
    public function setGetAssetSourcePriorityResult($GetAssetSourcePriorityResult)
    {
        $this->GetAssetSourcePriorityResult = $GetAssetSourcePriorityResult;
        return $this;
    }

}
