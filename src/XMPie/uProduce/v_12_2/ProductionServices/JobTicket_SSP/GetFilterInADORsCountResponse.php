<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP;

class GetFilterInADORsCountResponse
{

    /**
     * @var int $GetFilterInADORsCountResult
     */
    protected $GetFilterInADORsCountResult = null;

    /**
     * @param int $GetFilterInADORsCountResult
     */
    public function __construct($GetFilterInADORsCountResult = null)
    {
      $this->GetFilterInADORsCountResult = $GetFilterInADORsCountResult;
    }

    /**
     * @return int
     */
    public function getGetFilterInADORsCountResult()
    {
      return $this->GetFilterInADORsCountResult;
    }

    /**
     * @param int $GetFilterInADORsCountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP\GetFilterInADORsCountResponse
     */
    public function setGetFilterInADORsCountResult($GetFilterInADORsCountResult)
    {
      $this->GetFilterInADORsCountResult = $GetFilterInADORsCountResult;
      return $this;
    }

}
