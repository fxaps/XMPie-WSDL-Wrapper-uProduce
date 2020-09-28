<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSource_SSP;

class GetFolderPathResponse
{

    /**
     * @var string $GetFolderPathResult
     */
    protected $GetFolderPathResult = null;

    /**
     * @param string $GetFolderPathResult
     */
    public function __construct($GetFolderPathResult = null)
    {
        $this->GetFolderPathResult = $GetFolderPathResult;
    }

    /**
     * @return string
     */
    public function getGetFolderPathResult()
    {
        return $this->GetFolderPathResult;
    }

    /**
     * @param string $GetFolderPathResult
     * @return GetFolderPathResponse
     */
    public function setGetFolderPathResult($GetFolderPathResult)
    {
        $this->GetFolderPathResult = $GetFolderPathResult;
        return $this;
    }

}
