<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Font_SSP;

class GetSWFFileStreamResponse
{

    /**
     * @var base64Binary $GetSWFFileStreamResult
     */
    protected $GetSWFFileStreamResult = null;

    /**
     * @param base64Binary $GetSWFFileStreamResult
     */
    public function __construct($GetSWFFileStreamResult = null)
    {
        $this->GetSWFFileStreamResult = $GetSWFFileStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetSWFFileStreamResult()
    {
        return $this->GetSWFFileStreamResult;
    }

    /**
     * @param base64Binary $GetSWFFileStreamResult
     * @return GetSWFFileStreamResponse
     */
    public function setGetSWFFileStreamResult($GetSWFFileStreamResult)
    {
        $this->GetSWFFileStreamResult = $GetSWFFileStreamResult;
        return $this;
    }

}
