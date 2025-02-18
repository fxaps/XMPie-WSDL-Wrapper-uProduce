<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Plan_SSP;

class GetPathResponse
{

    /**
     * @var string $GetPathResult
     */
    protected $GetPathResult = null;

    /**
     * @param string $GetPathResult
     */
    public function __construct($GetPathResult = null)
    {
      $this->GetPathResult = $GetPathResult;
    }

    /**
     * @return string
     */
    public function getGetPathResult()
    {
      return $this->GetPathResult;
    }

    /**
     * @param string $GetPathResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Plan_SSP\GetPathResponse
     */
    public function setGetPathResult($GetPathResult)
    {
      $this->GetPathResult = $GetPathResult;
      return $this;
    }

}
