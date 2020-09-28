<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetPlanIDResponse
{

    /**
     * @var string $GetPlanIDResult
     */
    protected $GetPlanIDResult = null;

    /**
     * @param string $GetPlanIDResult
     */
    public function __construct($GetPlanIDResult = null)
    {
        $this->GetPlanIDResult = $GetPlanIDResult;
    }

    /**
     * @return string
     */
    public function getGetPlanIDResult()
    {
        return $this->GetPlanIDResult;
    }

    /**
     * @param string $GetPlanIDResult
     * @return GetPlanIDResponse
     */
    public function setGetPlanIDResult($GetPlanIDResult)
    {
        $this->GetPlanIDResult = $GetPlanIDResult;
        return $this;
    }

}
