<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSource_SSP;

class DeleteAllAssetsResponse
{

    /**
     * @var boolean $DeleteAllAssetsResult
     */
    protected $DeleteAllAssetsResult = null;

    /**
     * @param boolean $DeleteAllAssetsResult
     */
    public function __construct($DeleteAllAssetsResult = null)
    {
        $this->DeleteAllAssetsResult = $DeleteAllAssetsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllAssetsResult()
    {
        return $this->DeleteAllAssetsResult;
    }

    /**
     * @param boolean $DeleteAllAssetsResult
     * @return DeleteAllAssetsResponse
     */
    public function setDeleteAllAssetsResult($DeleteAllAssetsResult)
    {
        $this->DeleteAllAssetsResult = $DeleteAllAssetsResult;
        return $this;
    }

}
