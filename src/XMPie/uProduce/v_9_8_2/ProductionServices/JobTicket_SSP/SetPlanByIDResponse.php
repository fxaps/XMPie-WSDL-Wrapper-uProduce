<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetPlanByIDResponse
{

    /**
     * @var boolean $SetPlanByIDResult
     */
    protected $SetPlanByIDResult = null;

    /**
     * @param boolean $SetPlanByIDResult
     */
    public function __construct($SetPlanByIDResult = null)
    {
        $this->SetPlanByIDResult = $SetPlanByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetPlanByIDResult()
    {
        return $this->SetPlanByIDResult;
    }

    /**
     * @param boolean $SetPlanByIDResult
     * @return SetPlanByIDResponse
     */
    public function setSetPlanByIDResult($SetPlanByIDResult)
    {
        $this->SetPlanByIDResult = $SetPlanByIDResult;
        return $this;
    }

}
