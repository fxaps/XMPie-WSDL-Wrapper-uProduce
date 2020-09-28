<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetUseTrivialPlanResponse
{

    /**
     * @var boolean $GetUseTrivialPlanResult
     */
    protected $GetUseTrivialPlanResult = null;

    /**
     * @param boolean $GetUseTrivialPlanResult
     */
    public function __construct($GetUseTrivialPlanResult = null)
    {
        $this->GetUseTrivialPlanResult = $GetUseTrivialPlanResult;
    }

    /**
     * @return boolean
     */
    public function getGetUseTrivialPlanResult()
    {
        return $this->GetUseTrivialPlanResult;
    }

    /**
     * @param boolean $GetUseTrivialPlanResult
     * @return GetUseTrivialPlanResponse
     */
    public function setGetUseTrivialPlanResult($GetUseTrivialPlanResult)
    {
        $this->GetUseTrivialPlanResult = $GetUseTrivialPlanResult;
        return $this;
    }

}
