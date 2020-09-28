<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocumentIdByPopulationResponse
{

    /**
     * @var PreviewEmailResult $PreviewEmailDocumentIdByPopulationResult
     */
    protected $PreviewEmailDocumentIdByPopulationResult = null;

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentIdByPopulationResult
     */
    public function __construct($PreviewEmailDocumentIdByPopulationResult = null)
    {
        $this->PreviewEmailDocumentIdByPopulationResult = $PreviewEmailDocumentIdByPopulationResult;
    }

    /**
     * @return PreviewEmailResult
     */
    public function getPreviewEmailDocumentIdByPopulationResult()
    {
        return $this->PreviewEmailDocumentIdByPopulationResult;
    }

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentIdByPopulationResult
     * @return PreviewEmailDocumentIdByPopulationResponse
     */
    public function setPreviewEmailDocumentIdByPopulationResult($PreviewEmailDocumentIdByPopulationResult)
    {
        $this->PreviewEmailDocumentIdByPopulationResult = $PreviewEmailDocumentIdByPopulationResult;
        return $this;
    }

}
