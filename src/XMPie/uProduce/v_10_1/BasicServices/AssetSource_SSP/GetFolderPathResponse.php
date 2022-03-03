<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\AssetSource_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\AssetSource_SSP\GetFolderPathResponse
     */
    public function setGetFolderPathResult($GetFolderPathResult)
    {
      $this->GetFolderPathResult = $GetFolderPathResult;
      return $this;
    }

}
