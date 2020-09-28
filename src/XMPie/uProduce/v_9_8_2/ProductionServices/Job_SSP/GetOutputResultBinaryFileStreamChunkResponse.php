<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Job_SSP;

class GetOutputResultBinaryFileStreamChunkResponse
{

    /**
     * @var base64Binary $GetOutputResultBinaryFileStreamChunkResult
     */
    protected $GetOutputResultBinaryFileStreamChunkResult = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param base64Binary $GetOutputResultBinaryFileStreamChunkResult
     * @param int $inoutCount
     */
    public function __construct($GetOutputResultBinaryFileStreamChunkResult = null, $inoutCount = null)
    {
        $this->GetOutputResultBinaryFileStreamChunkResult = $GetOutputResultBinaryFileStreamChunkResult;
        $this->inoutCount = $inoutCount;
    }

    /**
     * @return base64Binary
     */
    public function getGetOutputResultBinaryFileStreamChunkResult()
    {
        return $this->GetOutputResultBinaryFileStreamChunkResult;
    }

    /**
     * @param base64Binary $GetOutputResultBinaryFileStreamChunkResult
     * @return GetOutputResultBinaryFileStreamChunkResponse
     */
    public function setGetOutputResultBinaryFileStreamChunkResult($GetOutputResultBinaryFileStreamChunkResult)
    {
        $this->GetOutputResultBinaryFileStreamChunkResult = $GetOutputResultBinaryFileStreamChunkResult;
        return $this;
    }

    /**
     * @return int
     */
    public function getInoutCount()
    {
        return $this->inoutCount;
    }

    /**
     * @param int $inoutCount
     * @return GetOutputResultBinaryFileStreamChunkResponse
     */
    public function setInoutCount($inoutCount)
    {
        $this->inoutCount = $inoutCount;
        return $this;
    }

}
