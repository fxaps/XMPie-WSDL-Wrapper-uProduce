<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetResourceBinaryFileStreamSizeByFileNameResponse
{

    /**
     * @var int $GetResourceBinaryFileStreamSizeByFileNameResult
     */
    protected $GetResourceBinaryFileStreamSizeByFileNameResult = null;

    /**
     * @param int $GetResourceBinaryFileStreamSizeByFileNameResult
     */
    public function __construct($GetResourceBinaryFileStreamSizeByFileNameResult = null)
    {
        $this->GetResourceBinaryFileStreamSizeByFileNameResult = $GetResourceBinaryFileStreamSizeByFileNameResult;
    }

    /**
     * @return int
     */
    public function getGetResourceBinaryFileStreamSizeByFileNameResult()
    {
        return $this->GetResourceBinaryFileStreamSizeByFileNameResult;
    }

    /**
     * @param int $GetResourceBinaryFileStreamSizeByFileNameResult
     * @return GetResourceBinaryFileStreamSizeByFileNameResponse
     */
    public function setGetResourceBinaryFileStreamSizeByFileNameResult($GetResourceBinaryFileStreamSizeByFileNameResult)
    {
        $this->GetResourceBinaryFileStreamSizeByFileNameResult = $GetResourceBinaryFileStreamSizeByFileNameResult;
        return $this;
    }

}
