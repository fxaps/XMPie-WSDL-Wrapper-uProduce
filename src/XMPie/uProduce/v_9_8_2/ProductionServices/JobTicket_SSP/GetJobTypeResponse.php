<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetJobTypeResponse
{

    /**
     * @var string $GetJobTypeResult
     */
    protected $GetJobTypeResult = null;

    /**
     * @param string $GetJobTypeResult
     */
    public function __construct($GetJobTypeResult = null)
    {
        $this->GetJobTypeResult = $GetJobTypeResult;
    }

    /**
     * @return string
     */
    public function getGetJobTypeResult()
    {
        return $this->GetJobTypeResult;
    }

    /**
     * @param string $GetJobTypeResult
     * @return GetJobTypeResponse
     */
    public function setGetJobTypeResult($GetJobTypeResult)
    {
        $this->GetJobTypeResult = $GetJobTypeResult;
        return $this;
    }

}
