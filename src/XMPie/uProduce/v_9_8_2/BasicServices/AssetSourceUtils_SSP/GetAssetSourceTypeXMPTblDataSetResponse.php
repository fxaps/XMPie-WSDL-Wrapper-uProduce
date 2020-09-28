<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSourceUtils_SSP;

class GetAssetSourceTypeXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetAssetSourceTypeXMPTblDataSetResult
     */
    protected $GetAssetSourceTypeXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetAssetSourceTypeXMPTblDataSetResult
     */
    public function __construct($GetAssetSourceTypeXMPTblDataSetResult = null)
    {
        $this->GetAssetSourceTypeXMPTblDataSetResult = $GetAssetSourceTypeXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetAssetSourceTypeXMPTblDataSetResult()
    {
        return $this->GetAssetSourceTypeXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetAssetSourceTypeXMPTblDataSetResult
     * @return GetAssetSourceTypeXMPTblDataSetResponse
     */
    public function setGetAssetSourceTypeXMPTblDataSetResult($GetAssetSourceTypeXMPTblDataSetResult)
    {
        $this->GetAssetSourceTypeXMPTblDataSetResult = $GetAssetSourceTypeXMPTblDataSetResult;
        return $this;
    }

}
