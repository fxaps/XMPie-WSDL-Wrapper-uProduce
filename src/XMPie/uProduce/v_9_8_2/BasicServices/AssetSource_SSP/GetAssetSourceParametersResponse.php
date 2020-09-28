<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSource_SSP;

class GetAssetSourceParametersResponse
{

    /**
     * @var ArrayOfAssetSourceParameter $GetAssetSourceParametersResult
     */
    protected $GetAssetSourceParametersResult = null;

    /**
     * @param ArrayOfAssetSourceParameter $GetAssetSourceParametersResult
     */
    public function __construct($GetAssetSourceParametersResult = null)
    {
        $this->GetAssetSourceParametersResult = $GetAssetSourceParametersResult;
    }

    /**
     * @return ArrayOfAssetSourceParameter
     */
    public function getGetAssetSourceParametersResult()
    {
        return $this->GetAssetSourceParametersResult;
    }

    /**
     * @param ArrayOfAssetSourceParameter $GetAssetSourceParametersResult
     * @return GetAssetSourceParametersResponse
     */
    public function setGetAssetSourceParametersResult($GetAssetSourceParametersResult)
    {
        $this->GetAssetSourceParametersResult = $GetAssetSourceParametersResult;
        return $this;
    }

}
