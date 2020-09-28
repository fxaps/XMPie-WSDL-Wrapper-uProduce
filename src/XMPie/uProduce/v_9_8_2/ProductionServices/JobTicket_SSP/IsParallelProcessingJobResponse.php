<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class IsParallelProcessingJobResponse
{

    /**
     * @var boolean $IsParallelProcessingJobResult
     */
    protected $IsParallelProcessingJobResult = null;

    /**
     * @param boolean $IsParallelProcessingJobResult
     */
    public function __construct($IsParallelProcessingJobResult = null)
    {
        $this->IsParallelProcessingJobResult = $IsParallelProcessingJobResult;
    }

    /**
     * @return boolean
     */
    public function getIsParallelProcessingJobResult()
    {
        return $this->IsParallelProcessingJobResult;
    }

    /**
     * @param boolean $IsParallelProcessingJobResult
     * @return IsParallelProcessingJobResponse
     */
    public function setIsParallelProcessingJobResult($IsParallelProcessingJobResult)
    {
        $this->IsParallelProcessingJobResult = $IsParallelProcessingJobResult;
        return $this;
    }

}
