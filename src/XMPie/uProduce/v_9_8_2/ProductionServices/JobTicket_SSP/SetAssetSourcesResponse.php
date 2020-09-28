<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetAssetSourcesResponse
{

    /**
     * @var boolean $SetAssetSourcesResult
     */
    protected $SetAssetSourcesResult = null;

    /**
     * @param boolean $SetAssetSourcesResult
     */
    public function __construct($SetAssetSourcesResult = null)
    {
        $this->SetAssetSourcesResult = $SetAssetSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getSetAssetSourcesResult()
    {
        return $this->SetAssetSourcesResult;
    }

    /**
     * @param boolean $SetAssetSourcesResult
     * @return SetAssetSourcesResponse
     */
    public function setSetAssetSourcesResult($SetAssetSourcesResult)
    {
        $this->SetAssetSourcesResult = $SetAssetSourcesResult;
        return $this;
    }

}
