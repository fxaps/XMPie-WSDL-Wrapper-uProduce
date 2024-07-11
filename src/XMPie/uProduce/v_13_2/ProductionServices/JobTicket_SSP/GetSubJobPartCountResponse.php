<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

class GetSubJobPartCountResponse
{

    /**
     * @var int $GetSubJobPartCountResult
     */
    protected $GetSubJobPartCountResult = null;

    /**
     * @param int $GetSubJobPartCountResult
     */
    public function __construct($GetSubJobPartCountResult = null)
    {
      $this->GetSubJobPartCountResult = $GetSubJobPartCountResult;
    }

    /**
     * @return int
     */
    public function getGetSubJobPartCountResult()
    {
      return $this->GetSubJobPartCountResult;
    }

    /**
     * @param int $GetSubJobPartCountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\GetSubJobPartCountResponse
     */
    public function setGetSubJobPartCountResult($GetSubJobPartCountResult)
    {
      $this->GetSubJobPartCountResult = $GetSubJobPartCountResult;
      return $this;
    }

}
