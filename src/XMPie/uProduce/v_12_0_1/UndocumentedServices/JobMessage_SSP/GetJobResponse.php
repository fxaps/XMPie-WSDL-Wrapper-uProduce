<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\JobMessage_SSP;

class GetJobResponse
{

    /**
     * @var string $GetJobResult
     */
    protected $GetJobResult = null;

    /**
     * @param string $GetJobResult
     */
    public function __construct($GetJobResult = null)
    {
      $this->GetJobResult = $GetJobResult;
    }

    /**
     * @return string
     */
    public function getGetJobResult()
    {
      return $this->GetJobResult;
    }

    /**
     * @param string $GetJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\JobMessage_SSP\GetJobResponse
     */
    public function setGetJobResult($GetJobResult)
    {
      $this->GetJobResult = $GetJobResult;
      return $this;
    }

}
