<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

class GetNthFilterOutADORResponse
{

    /**
     * @var string $GetNthFilterOutADORResult
     */
    protected $GetNthFilterOutADORResult = null;

    /**
     * @param string $GetNthFilterOutADORResult
     */
    public function __construct($GetNthFilterOutADORResult = null)
    {
      $this->GetNthFilterOutADORResult = $GetNthFilterOutADORResult;
    }

    /**
     * @return string
     */
    public function getGetNthFilterOutADORResult()
    {
      return $this->GetNthFilterOutADORResult;
    }

    /**
     * @param string $GetNthFilterOutADORResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\GetNthFilterOutADORResponse
     */
    public function setGetNthFilterOutADORResult($GetNthFilterOutADORResult)
    {
      $this->GetNthFilterOutADORResult = $GetNthFilterOutADORResult;
      return $this;
    }

}
