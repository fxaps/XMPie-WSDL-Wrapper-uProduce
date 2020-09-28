<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Font_SSP;

class GetBinarySecondaryFileStreamSizeResponse
{

    /**
     * @var int $GetBinarySecondaryFileStreamSizeResult
     */
    protected $GetBinarySecondaryFileStreamSizeResult = null;

    /**
     * @param int $GetBinarySecondaryFileStreamSizeResult
     */
    public function __construct($GetBinarySecondaryFileStreamSizeResult = null)
    {
        $this->GetBinarySecondaryFileStreamSizeResult = $GetBinarySecondaryFileStreamSizeResult;
    }

    /**
     * @return int
     */
    public function getGetBinarySecondaryFileStreamSizeResult()
    {
        return $this->GetBinarySecondaryFileStreamSizeResult;
    }

    /**
     * @param int $GetBinarySecondaryFileStreamSizeResult
     * @return GetBinarySecondaryFileStreamSizeResponse
     */
    public function setGetBinarySecondaryFileStreamSizeResult($GetBinarySecondaryFileStreamSizeResult)
    {
        $this->GetBinarySecondaryFileStreamSizeResult = $GetBinarySecondaryFileStreamSizeResult;
        return $this;
    }

}
