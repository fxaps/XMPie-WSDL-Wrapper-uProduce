<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP;

class GetFilterOutADORsResponse
{

    /**
     * @var ArrayOfString $GetFilterOutADORsResult
     */
    protected $GetFilterOutADORsResult = null;

    /**
     * @param ArrayOfString $GetFilterOutADORsResult
     */
    public function __construct($GetFilterOutADORsResult = null)
    {
      $this->GetFilterOutADORsResult = $GetFilterOutADORsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetFilterOutADORsResult()
    {
      return $this->GetFilterOutADORsResult;
    }

    /**
     * @param ArrayOfString $GetFilterOutADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\GetFilterOutADORsResponse
     */
    public function setGetFilterOutADORsResult($GetFilterOutADORsResult)
    {
      $this->GetFilterOutADORsResult = $GetFilterOutADORsResult;
      return $this;
    }

}
