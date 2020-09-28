<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Job_SSP;

class GetOutputResultsInfoResponse
{

    /**
     * @var ArrayOfOutputResult $GetOutputResultsInfoResult
     */
    protected $GetOutputResultsInfoResult = null;

    /**
     * @param ArrayOfOutputResult $GetOutputResultsInfoResult
     */
    public function __construct($GetOutputResultsInfoResult = null)
    {
        $this->GetOutputResultsInfoResult = $GetOutputResultsInfoResult;
    }

    /**
     * @return ArrayOfOutputResult
     */
    public function getGetOutputResultsInfoResult()
    {
        return $this->GetOutputResultsInfoResult;
    }

    /**
     * @param ArrayOfOutputResult $GetOutputResultsInfoResult
     * @return GetOutputResultsInfoResponse
     */
    public function setGetOutputResultsInfoResult($GetOutputResultsInfoResult)
    {
        $this->GetOutputResultsInfoResult = $GetOutputResultsInfoResult;
        return $this;
    }

}
