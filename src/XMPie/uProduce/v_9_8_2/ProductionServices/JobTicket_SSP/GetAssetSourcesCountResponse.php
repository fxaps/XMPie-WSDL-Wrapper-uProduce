<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetAssetSourcesCountResponse
{

    /**
     * @var int $GetAssetSourcesCountResult
     */
    protected $GetAssetSourcesCountResult = null;

    /**
     * @param int $GetAssetSourcesCountResult
     */
    public function __construct($GetAssetSourcesCountResult = null)
    {
        $this->GetAssetSourcesCountResult = $GetAssetSourcesCountResult;
    }

    /**
     * @return int
     */
    public function getGetAssetSourcesCountResult()
    {
        return $this->GetAssetSourcesCountResult;
    }

    /**
     * @param int $GetAssetSourcesCountResult
     * @return GetAssetSourcesCountResponse
     */
    public function setGetAssetSourcesCountResult($GetAssetSourcesCountResult)
    {
        $this->GetAssetSourcesCountResult = $GetAssetSourcesCountResult;
        return $this;
    }

}
