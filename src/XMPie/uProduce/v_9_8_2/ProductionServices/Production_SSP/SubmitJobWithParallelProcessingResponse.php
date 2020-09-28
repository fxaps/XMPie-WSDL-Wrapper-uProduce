<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Production_SSP;

class SubmitJobWithParallelProcessingResponse
{

    /**
     * @var string $SubmitJobWithParallelProcessingResult
     */
    protected $SubmitJobWithParallelProcessingResult = null;

    /**
     * @param string $SubmitJobWithParallelProcessingResult
     */
    public function __construct($SubmitJobWithParallelProcessingResult = null)
    {
        $this->SubmitJobWithParallelProcessingResult = $SubmitJobWithParallelProcessingResult;
    }

    /**
     * @return string
     */
    public function getSubmitJobWithParallelProcessingResult()
    {
        return $this->SubmitJobWithParallelProcessingResult;
    }

    /**
     * @param string $SubmitJobWithParallelProcessingResult
     * @return SubmitJobWithParallelProcessingResponse
     */
    public function setSubmitJobWithParallelProcessingResult($SubmitJobWithParallelProcessingResult)
    {
        $this->SubmitJobWithParallelProcessingResult = $SubmitJobWithParallelProcessingResult;
        return $this;
    }

}
