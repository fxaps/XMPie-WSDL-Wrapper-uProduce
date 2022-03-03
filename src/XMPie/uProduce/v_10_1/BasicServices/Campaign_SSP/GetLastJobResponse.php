<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Campaign_SSP;

class GetLastJobResponse
{

    /**
     * @var string $GetLastJobResult
     */
    protected $GetLastJobResult = null;

    /**
     * @param string $GetLastJobResult
     */
    public function __construct($GetLastJobResult = null)
    {
      $this->GetLastJobResult = $GetLastJobResult;
    }

    /**
     * @return string
     */
    public function getGetLastJobResult()
    {
      return $this->GetLastJobResult;
    }

    /**
     * @param string $GetLastJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Campaign_SSP\GetLastJobResponse
     */
    public function setGetLastJobResult($GetLastJobResult)
    {
      $this->GetLastJobResult = $GetLastJobResult;
      return $this;
    }

}
