<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\PlanUtils_SSP;

class GetVariableResponse
{

    /**
     * @var PlanObject $GetVariableResult
     */
    protected $GetVariableResult = null;

    /**
     * @param PlanObject $GetVariableResult
     */
    public function __construct($GetVariableResult = null)
    {
        $this->GetVariableResult = $GetVariableResult;
    }

    /**
     * @return PlanObject
     */
    public function getGetVariableResult()
    {
        return $this->GetVariableResult;
    }

    /**
     * @param PlanObject $GetVariableResult
     * @return GetVariableResponse
     */
    public function setGetVariableResult($GetVariableResult)
    {
        $this->GetVariableResult = $GetVariableResult;
        return $this;
    }

}
