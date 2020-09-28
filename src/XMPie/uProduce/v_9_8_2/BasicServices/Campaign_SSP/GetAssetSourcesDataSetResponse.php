<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetAssetSourcesDataSetResponse
{

    /**
     * @var GetAssetSourcesDataSetResult $GetAssetSourcesDataSetResult
     */
    protected $GetAssetSourcesDataSetResult = null;

    /**
     * @param GetAssetSourcesDataSetResult $GetAssetSourcesDataSetResult
     */
    public function __construct($GetAssetSourcesDataSetResult = null)
    {
        $this->GetAssetSourcesDataSetResult = $GetAssetSourcesDataSetResult;
    }

    /**
     * @return GetAssetSourcesDataSetResult
     */
    public function getGetAssetSourcesDataSetResult()
    {
        return $this->GetAssetSourcesDataSetResult;
    }

    /**
     * @param GetAssetSourcesDataSetResult $GetAssetSourcesDataSetResult
     * @return GetAssetSourcesDataSetResponse
     */
    public function setGetAssetSourcesDataSetResult($GetAssetSourcesDataSetResult)
    {
        $this->GetAssetSourcesDataSetResult = $GetAssetSourcesDataSetResult;
        return $this;
    }

}
