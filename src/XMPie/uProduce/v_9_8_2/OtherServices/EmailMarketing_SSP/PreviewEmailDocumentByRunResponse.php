<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocumentByRunResponse
{

    /**
     * @var PreviewEmailResult $PreviewEmailDocumentByRunResult
     */
    protected $PreviewEmailDocumentByRunResult = null;

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentByRunResult
     */
    public function __construct($PreviewEmailDocumentByRunResult = null)
    {
        $this->PreviewEmailDocumentByRunResult = $PreviewEmailDocumentByRunResult;
    }

    /**
     * @return PreviewEmailResult
     */
    public function getPreviewEmailDocumentByRunResult()
    {
        return $this->PreviewEmailDocumentByRunResult;
    }

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentByRunResult
     * @return PreviewEmailDocumentByRunResponse
     */
    public function setPreviewEmailDocumentByRunResult($PreviewEmailDocumentByRunResult)
    {
        $this->PreviewEmailDocumentByRunResult = $PreviewEmailDocumentByRunResult;
        return $this;
    }

}
