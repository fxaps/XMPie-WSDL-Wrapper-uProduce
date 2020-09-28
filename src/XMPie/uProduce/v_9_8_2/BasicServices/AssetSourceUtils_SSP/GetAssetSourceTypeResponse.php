<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSourceUtils_SSP;

class GetAssetSourceTypeResponse
{

    /**
     * @var GetAssetSourceTypeResult $GetAssetSourceTypeResult
     */
    protected $GetAssetSourceTypeResult = null;

    /**
     * @param GetAssetSourceTypeResult $GetAssetSourceTypeResult
     */
    public function __construct($GetAssetSourceTypeResult = null)
    {
        $this->GetAssetSourceTypeResult = $GetAssetSourceTypeResult;
    }

    /**
     * @return GetAssetSourceTypeResult
     */
    public function getGetAssetSourceTypeResult()
    {
        return $this->GetAssetSourceTypeResult;
    }

    /**
     * @param GetAssetSourceTypeResult $GetAssetSourceTypeResult
     * @return GetAssetSourceTypeResponse
     */
    public function setGetAssetSourceTypeResult($GetAssetSourceTypeResult)
    {
        $this->GetAssetSourceTypeResult = $GetAssetSourceTypeResult;
        return $this;
    }

}
