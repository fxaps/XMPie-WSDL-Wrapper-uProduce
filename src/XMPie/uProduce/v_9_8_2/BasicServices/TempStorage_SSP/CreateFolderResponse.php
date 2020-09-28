<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\TempStorage_SSP;

class CreateFolderResponse
{

    /**
     * @var string $CreateFolderResult
     */
    protected $CreateFolderResult = null;

    /**
     * @param string $CreateFolderResult
     */
    public function __construct($CreateFolderResult = null)
    {
        $this->CreateFolderResult = $CreateFolderResult;
    }

    /**
     * @return string
     */
    public function getCreateFolderResult()
    {
        return $this->CreateFolderResult;
    }

    /**
     * @param string $CreateFolderResult
     * @return CreateFolderResponse
     */
    public function setCreateFolderResult($CreateFolderResult)
    {
        $this->CreateFolderResult = $CreateFolderResult;
        return $this;
    }

}
