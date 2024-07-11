<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

class GetOutputTypeResponse
{

    /**
     * @var string $GetOutputTypeResult
     */
    protected $GetOutputTypeResult = null;

    /**
     * @param string $GetOutputTypeResult
     */
    public function __construct($GetOutputTypeResult = null)
    {
      $this->GetOutputTypeResult = $GetOutputTypeResult;
    }

    /**
     * @return string
     */
    public function getGetOutputTypeResult()
    {
      return $this->GetOutputTypeResult;
    }

    /**
     * @param string $GetOutputTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\GetOutputTypeResponse
     */
    public function setGetOutputTypeResult($GetOutputTypeResult)
    {
      $this->GetOutputTypeResult = $GetOutputTypeResult;
      return $this;
    }

}
