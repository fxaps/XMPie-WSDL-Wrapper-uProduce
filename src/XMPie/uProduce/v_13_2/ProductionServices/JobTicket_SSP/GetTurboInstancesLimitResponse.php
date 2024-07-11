<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

class GetTurboInstancesLimitResponse
{

    /**
     * @var int $GetTurboInstancesLimitResult
     */
    protected $GetTurboInstancesLimitResult = null;

    /**
     * @param int $GetTurboInstancesLimitResult
     */
    public function __construct($GetTurboInstancesLimitResult = null)
    {
      $this->GetTurboInstancesLimitResult = $GetTurboInstancesLimitResult;
    }

    /**
     * @return int
     */
    public function getGetTurboInstancesLimitResult()
    {
      return $this->GetTurboInstancesLimitResult;
    }

    /**
     * @param int $GetTurboInstancesLimitResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\GetTurboInstancesLimitResponse
     */
    public function setGetTurboInstancesLimitResult($GetTurboInstancesLimitResult)
    {
      $this->GetTurboInstancesLimitResult = $GetTurboInstancesLimitResult;
      return $this;
    }

}
