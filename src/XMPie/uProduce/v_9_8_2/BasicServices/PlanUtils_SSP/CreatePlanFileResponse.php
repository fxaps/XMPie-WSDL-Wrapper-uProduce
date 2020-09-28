<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\PlanUtils_SSP;

class CreatePlanFileResponse
{

    /**
     * @var string $CreatePlanFileResult
     */
    protected $CreatePlanFileResult = null;

    /**
     * @param string $CreatePlanFileResult
     */
    public function __construct($CreatePlanFileResult = null)
    {
        $this->CreatePlanFileResult = $CreatePlanFileResult;
    }

    /**
     * @return string
     */
    public function getCreatePlanFileResult()
    {
        return $this->CreatePlanFileResult;
    }

    /**
     * @param string $CreatePlanFileResult
     * @return CreatePlanFileResponse
     */
    public function setCreatePlanFileResult($CreatePlanFileResult)
    {
        $this->CreatePlanFileResult = $CreatePlanFileResult;
        return $this;
    }

}
