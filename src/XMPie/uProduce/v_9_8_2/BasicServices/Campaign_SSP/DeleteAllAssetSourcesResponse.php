<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class DeleteAllAssetSourcesResponse
{

    /**
     * @var boolean $DeleteAllAssetSourcesResult
     */
    protected $DeleteAllAssetSourcesResult = null;

    /**
     * @param boolean $DeleteAllAssetSourcesResult
     */
    public function __construct($DeleteAllAssetSourcesResult = null)
    {
        $this->DeleteAllAssetSourcesResult = $DeleteAllAssetSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllAssetSourcesResult()
    {
        return $this->DeleteAllAssetSourcesResult;
    }

    /**
     * @param boolean $DeleteAllAssetSourcesResult
     * @return DeleteAllAssetSourcesResponse
     */
    public function setDeleteAllAssetSourcesResult($DeleteAllAssetSourcesResult)
    {
        $this->DeleteAllAssetSourcesResult = $DeleteAllAssetSourcesResult;
        return $this;
    }

}
