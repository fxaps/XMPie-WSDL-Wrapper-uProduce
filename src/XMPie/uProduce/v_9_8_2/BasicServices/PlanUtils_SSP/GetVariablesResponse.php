<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\PlanUtils_SSP;

class GetVariablesResponse
{

    /**
     * @var ArrayOfPlanObject $GetVariablesResult
     */
    protected $GetVariablesResult = null;

    /**
     * @param ArrayOfPlanObject $GetVariablesResult
     */
    public function __construct($GetVariablesResult = null)
    {
        $this->GetVariablesResult = $GetVariablesResult;
    }

    /**
     * @return ArrayOfPlanObject
     */
    public function getGetVariablesResult()
    {
        return $this->GetVariablesResult;
    }

    /**
     * @param ArrayOfPlanObject $GetVariablesResult
     * @return GetVariablesResponse
     */
    public function setGetVariablesResult($GetVariablesResult)
    {
        $this->GetVariablesResult = $GetVariablesResult;
        return $this;
    }

}
