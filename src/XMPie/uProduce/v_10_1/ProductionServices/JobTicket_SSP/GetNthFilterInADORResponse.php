<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\ProductionServices\JobTicket_SSP;

class GetNthFilterInADORResponse
{

    /**
     * @var string $GetNthFilterInADORResult
     */
    protected $GetNthFilterInADORResult = null;

    /**
     * @param string $GetNthFilterInADORResult
     */
    public function __construct($GetNthFilterInADORResult = null)
    {
      $this->GetNthFilterInADORResult = $GetNthFilterInADORResult;
    }

    /**
     * @return string
     */
    public function getGetNthFilterInADORResult()
    {
      return $this->GetNthFilterInADORResult;
    }

    /**
     * @param string $GetNthFilterInADORResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\ProductionServices\JobTicket_SSP\GetNthFilterInADORResponse
     */
    public function setGetNthFilterInADORResult($GetNthFilterInADORResult)
    {
      $this->GetNthFilterInADORResult = $GetNthFilterInADORResult;
      return $this;
    }

}
