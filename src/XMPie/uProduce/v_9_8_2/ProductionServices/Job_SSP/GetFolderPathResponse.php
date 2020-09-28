<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Job_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Job_SSP\GetFolderPathResponse
     */
    public function setGetFolderPathResult($GetFolderPathResult)
    {
      $this->GetFolderPathResult = $GetFolderPathResult;
      return $this;
    }

}
