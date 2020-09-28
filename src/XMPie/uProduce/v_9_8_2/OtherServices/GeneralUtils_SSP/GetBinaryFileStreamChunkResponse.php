<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class GetBinaryFileStreamChunkResponse
{

    /**
     * @var base64Binary $GetBinaryFileStreamChunkResult
     */
    protected $GetBinaryFileStreamChunkResult = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param base64Binary $GetBinaryFileStreamChunkResult
     * @param int $inoutCount
     */
    public function __construct($GetBinaryFileStreamChunkResult = null, $inoutCount = null)
    {
        $this->GetBinaryFileStreamChunkResult = $GetBinaryFileStreamChunkResult;
        $this->inoutCount = $inoutCount;
    }

    /**
     * @return base64Binary
     */
    public function getGetBinaryFileStreamChunkResult()
    {
        return $this->GetBinaryFileStreamChunkResult;
    }

    /**
     * @param base64Binary $GetBinaryFileStreamChunkResult
     * @return GetBinaryFileStreamChunkResponse
     */
    public function setGetBinaryFileStreamChunkResult($GetBinaryFileStreamChunkResult)
    {
        $this->GetBinaryFileStreamChunkResult = $GetBinaryFileStreamChunkResult;
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
     * @return GetBinaryFileStreamChunkResponse
     */
    public function setInoutCount($inoutCount)
    {
        $this->inoutCount = $inoutCount;
        return $this;
    }

}
