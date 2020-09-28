<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class GetPreviewEmailResultResponse
{

    /**
     * @var PreviewEmailResult $GetPreviewEmailResultResult
     */
    protected $GetPreviewEmailResultResult = null;

    /**
     * @param PreviewEmailResult $GetPreviewEmailResultResult
     */
    public function __construct($GetPreviewEmailResultResult = null)
    {
        $this->GetPreviewEmailResultResult = $GetPreviewEmailResultResult;
    }

    /**
     * @return PreviewEmailResult
     */
    public function getGetPreviewEmailResultResult()
    {
        return $this->GetPreviewEmailResultResult;
    }

    /**
     * @param PreviewEmailResult $GetPreviewEmailResultResult
     * @return GetPreviewEmailResultResponse
     */
    public function setGetPreviewEmailResultResult($GetPreviewEmailResultResult)
    {
        $this->GetPreviewEmailResultResult = $GetPreviewEmailResultResult;
        return $this;
    }

}
