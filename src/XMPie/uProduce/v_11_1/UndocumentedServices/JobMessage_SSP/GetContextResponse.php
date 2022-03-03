<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\JobMessage_SSP;

class GetContextResponse
{

    /**
     * @var string $GetContextResult
     */
    protected $GetContextResult = null;

    /**
     * @param string $GetContextResult
     */
    public function __construct($GetContextResult = null)
    {
      $this->GetContextResult = $GetContextResult;
    }

    /**
     * @return string
     */
    public function getGetContextResult()
    {
      return $this->GetContextResult;
    }

    /**
     * @param string $GetContextResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\JobMessage_SSP\GetContextResponse
     */
    public function setGetContextResult($GetContextResult)
    {
      $this->GetContextResult = $GetContextResult;
      return $this;
    }

}
