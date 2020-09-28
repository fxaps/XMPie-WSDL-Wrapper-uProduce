<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSource_SSP;

class GetAssetSourceInfoResponse
{

    /**
     * @var AssetSourceStruct $GetAssetSourceInfoResult
     */
    protected $GetAssetSourceInfoResult = null;

    /**
     * @param AssetSourceStruct $GetAssetSourceInfoResult
     */
    public function __construct($GetAssetSourceInfoResult = null)
    {
        $this->GetAssetSourceInfoResult = $GetAssetSourceInfoResult;
    }

    /**
     * @return AssetSourceStruct
     */
    public function getGetAssetSourceInfoResult()
    {
        return $this->GetAssetSourceInfoResult;
    }

    /**
     * @param AssetSourceStruct $GetAssetSourceInfoResult
     * @return GetAssetSourceInfoResponse
     */
    public function setGetAssetSourceInfoResult($GetAssetSourceInfoResult)
    {
        $this->GetAssetSourceInfoResult = $GetAssetSourceInfoResult;
        return $this;
    }

}
