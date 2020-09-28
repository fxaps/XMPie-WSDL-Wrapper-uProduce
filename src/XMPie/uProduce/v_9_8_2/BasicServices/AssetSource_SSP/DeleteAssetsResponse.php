<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSource_SSP;

class DeleteAssetsResponse
{

    /**
     * @var boolean $DeleteAssetsResult
     */
    protected $DeleteAssetsResult = null;

    /**
     * @param boolean $DeleteAssetsResult
     */
    public function __construct($DeleteAssetsResult = null)
    {
        $this->DeleteAssetsResult = $DeleteAssetsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAssetsResult()
    {
        return $this->DeleteAssetsResult;
    }

    /**
     * @param boolean $DeleteAssetsResult
     * @return DeleteAssetsResponse
     */
    public function setDeleteAssetsResult($DeleteAssetsResult)
    {
        $this->DeleteAssetsResult = $DeleteAssetsResult;
        return $this;
    }

}
