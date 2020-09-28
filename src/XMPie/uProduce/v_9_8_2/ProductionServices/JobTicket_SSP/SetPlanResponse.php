<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetPlanResponse
{

    /**
     * @var boolean $SetPlanResult
     */
    protected $SetPlanResult = null;

    /**
     * @param boolean $SetPlanResult
     */
    public function __construct($SetPlanResult = null)
    {
        $this->SetPlanResult = $SetPlanResult;
    }

    /**
     * @return boolean
     */
    public function getSetPlanResult()
    {
        return $this->SetPlanResult;
    }

    /**
     * @param boolean $SetPlanResult
     * @return SetPlanResponse
     */
    public function setSetPlanResult($SetPlanResult)
    {
        $this->SetPlanResult = $SetPlanResult;
        return $this;
    }

}
