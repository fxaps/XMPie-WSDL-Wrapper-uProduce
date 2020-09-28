<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSource_SSP;

class GetAssetSourceTypeResponse
{

    /**
     * @var string $GetAssetSourceTypeResult
     */
    protected $GetAssetSourceTypeResult = null;

    /**
     * @param string $GetAssetSourceTypeResult
     */
    public function __construct($GetAssetSourceTypeResult = null)
    {
        $this->GetAssetSourceTypeResult = $GetAssetSourceTypeResult;
    }

    /**
     * @return string
     */
    public function getGetAssetSourceTypeResult()
    {
        return $this->GetAssetSourceTypeResult;
    }

    /**
     * @param string $GetAssetSourceTypeResult
     * @return GetAssetSourceTypeResponse
     */
    public function setGetAssetSourceTypeResult($GetAssetSourceTypeResult)
    {
        $this->GetAssetSourceTypeResult = $GetAssetSourceTypeResult;
        return $this;
    }

}
