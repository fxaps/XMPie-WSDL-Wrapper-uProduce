<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP;

class GetFilterInADORsResponse
{

    /**
     * @var ArrayOfString $GetFilterInADORsResult
     */
    protected $GetFilterInADORsResult = null;

    /**
     * @param ArrayOfString $GetFilterInADORsResult
     */
    public function __construct($GetFilterInADORsResult = null)
    {
      $this->GetFilterInADORsResult = $GetFilterInADORsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetFilterInADORsResult()
    {
      return $this->GetFilterInADORsResult;
    }

    /**
     * @param ArrayOfString $GetFilterInADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP\GetFilterInADORsResponse
     */
    public function setGetFilterInADORsResult($GetFilterInADORsResult)
    {
      $this->GetFilterInADORsResult = $GetFilterInADORsResult;
      return $this;
    }

}
