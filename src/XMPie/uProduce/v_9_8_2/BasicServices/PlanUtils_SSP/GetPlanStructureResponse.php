<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\PlanUtils_SSP;

class GetPlanStructureResponse
{

    /**
     * @var PlanStructure $GetPlanStructureResult
     */
    protected $GetPlanStructureResult = null;

    /**
     * @param PlanStructure $GetPlanStructureResult
     */
    public function __construct($GetPlanStructureResult = null)
    {
        $this->GetPlanStructureResult = $GetPlanStructureResult;
    }

    /**
     * @return PlanStructure
     */
    public function getGetPlanStructureResult()
    {
        return $this->GetPlanStructureResult;
    }

    /**
     * @param PlanStructure $GetPlanStructureResult
     * @return GetPlanStructureResponse
     */
    public function setGetPlanStructureResult($GetPlanStructureResult)
    {
        $this->GetPlanStructureResult = $GetPlanStructureResult;
        return $this;
    }

}
