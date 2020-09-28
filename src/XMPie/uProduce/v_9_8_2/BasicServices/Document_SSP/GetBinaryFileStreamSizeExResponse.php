<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetBinaryFileStreamSizeExResponse
{

    /**
     * @var int $GetBinaryFileStreamSizeExResult
     */
    protected $GetBinaryFileStreamSizeExResult = null;

    /**
     * @param int $GetBinaryFileStreamSizeExResult
     */
    public function __construct($GetBinaryFileStreamSizeExResult = null)
    {
        $this->GetBinaryFileStreamSizeExResult = $GetBinaryFileStreamSizeExResult;
    }

    /**
     * @return int
     */
    public function getGetBinaryFileStreamSizeExResult()
    {
        return $this->GetBinaryFileStreamSizeExResult;
    }

    /**
     * @param int $GetBinaryFileStreamSizeExResult
     * @return GetBinaryFileStreamSizeExResponse
     */
    public function setGetBinaryFileStreamSizeExResult($GetBinaryFileStreamSizeExResult)
    {
        $this->GetBinaryFileStreamSizeExResult = $GetBinaryFileStreamSizeExResult;
        return $this;
    }

}
