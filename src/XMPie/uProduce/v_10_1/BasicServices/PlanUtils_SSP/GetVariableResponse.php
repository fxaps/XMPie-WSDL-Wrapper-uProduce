<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\PlanUtils_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\PlanUtils_SSP\GetVariableResponse
     */
    public function setGetVariableResult($GetVariableResult)
    {
      $this->GetVariableResult = $GetVariableResult;
      return $this;
    }

}
