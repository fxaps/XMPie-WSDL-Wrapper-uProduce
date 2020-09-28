<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Production_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Production_SSP\SubmitJobWithParallelProcessingResponse
     */
    public function setSubmitJobWithParallelProcessingResult($SubmitJobWithParallelProcessingResult)
    {
      $this->SubmitJobWithParallelProcessingResult = $SubmitJobWithParallelProcessingResult;
      return $this;
    }

}
