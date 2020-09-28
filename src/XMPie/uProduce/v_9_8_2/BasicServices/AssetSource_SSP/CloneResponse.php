<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSource_SSP;

class CloneResponse
{

    /**
     * @var AssetSourceMapping $CloneResult
     */
    protected $CloneResult = null;

    /**
     * @param AssetSourceMapping $CloneResult
     */
    public function __construct($CloneResult = null)
    {
        $this->CloneResult = $CloneResult;
    }

    /**
     * @return AssetSourceMapping
     */
    public function getCloneResult()
    {
        return $this->CloneResult;
    }

    /**
     * @param AssetSourceMapping $CloneResult
     * @return CloneResponse
     */
    public function setCloneResult($CloneResult)
    {
        $this->CloneResult = $CloneResult;
        return $this;
    }

}
