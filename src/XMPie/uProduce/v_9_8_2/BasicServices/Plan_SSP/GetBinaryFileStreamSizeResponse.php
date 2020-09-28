<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Plan_SSP;

class GetBinaryFileStreamSizeResponse
{

    /**
     * @var int $GetBinaryFileStreamSizeResult
     */
    protected $GetBinaryFileStreamSizeResult = null;

    /**
     * @param int $GetBinaryFileStreamSizeResult
     */
    public function __construct($GetBinaryFileStreamSizeResult = null)
    {
        $this->GetBinaryFileStreamSizeResult = $GetBinaryFileStreamSizeResult;
    }

    /**
     * @return int
     */
    public function getGetBinaryFileStreamSizeResult()
    {
        return $this->GetBinaryFileStreamSizeResult;
    }

    /**
     * @param int $GetBinaryFileStreamSizeResult
     * @return GetBinaryFileStreamSizeResponse
     */
    public function setGetBinaryFileStreamSizeResult($GetBinaryFileStreamSizeResult)
    {
        $this->GetBinaryFileStreamSizeResult = $GetBinaryFileStreamSizeResult;
        return $this;
    }

}
