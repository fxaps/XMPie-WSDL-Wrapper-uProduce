<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP;

class GetFilterOutADORsCountResponse
{

    /**
     * @var int $GetFilterOutADORsCountResult
     */
    protected $GetFilterOutADORsCountResult = null;

    /**
     * @param int $GetFilterOutADORsCountResult
     */
    public function __construct($GetFilterOutADORsCountResult = null)
    {
      $this->GetFilterOutADORsCountResult = $GetFilterOutADORsCountResult;
    }

    /**
     * @return int
     */
    public function getGetFilterOutADORsCountResult()
    {
      return $this->GetFilterOutADORsCountResult;
    }

    /**
     * @param int $GetFilterOutADORsCountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP\GetFilterOutADORsCountResponse
     */
    public function setGetFilterOutADORsCountResult($GetFilterOutADORsCountResult)
    {
      $this->GetFilterOutADORsCountResult = $GetFilterOutADORsCountResult;
      return $this;
    }

}
