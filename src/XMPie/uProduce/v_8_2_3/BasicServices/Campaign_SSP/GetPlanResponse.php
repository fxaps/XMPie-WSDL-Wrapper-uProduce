<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Campaign_SSP;

class GetPlanResponse
{

    /**
     * @var string $GetPlanResult
     */
    protected $GetPlanResult = null;

    /**
     * @param string $GetPlanResult
     */
    public function __construct($GetPlanResult = null)
    {
      $this->GetPlanResult = $GetPlanResult;
    }

    /**
     * @return string
     */
    public function getGetPlanResult()
    {
      return $this->GetPlanResult;
    }

    /**
     * @param string $GetPlanResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Campaign_SSP\GetPlanResponse
     */
    public function setGetPlanResult($GetPlanResult)
    {
      $this->GetPlanResult = $GetPlanResult;
      return $this;
    }

}
