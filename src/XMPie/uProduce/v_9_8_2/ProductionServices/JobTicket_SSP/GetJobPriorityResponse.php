<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetJobPriorityResponse
{

    /**
     * @var int $GetJobPriorityResult
     */
    protected $GetJobPriorityResult = null;

    /**
     * @param int $GetJobPriorityResult
     */
    public function __construct($GetJobPriorityResult = null)
    {
        $this->GetJobPriorityResult = $GetJobPriorityResult;
    }

    /**
     * @return int
     */
    public function getGetJobPriorityResult()
    {
        return $this->GetJobPriorityResult;
    }

    /**
     * @param int $GetJobPriorityResult
     * @return GetJobPriorityResponse
     */
    public function setGetJobPriorityResult($GetJobPriorityResult)
    {
        $this->GetJobPriorityResult = $GetJobPriorityResult;
        return $this;
    }

}
