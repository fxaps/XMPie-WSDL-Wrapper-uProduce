<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetDocumentTypeResponse
{

    /**
     * @var GetDocumentTypeResult $GetDocumentTypeResult
     */
    protected $GetDocumentTypeResult = null;

    /**
     * @param GetDocumentTypeResult $GetDocumentTypeResult
     */
    public function __construct($GetDocumentTypeResult = null)
    {
        $this->GetDocumentTypeResult = $GetDocumentTypeResult;
    }

    /**
     * @return GetDocumentTypeResult
     */
    public function getGetDocumentTypeResult()
    {
        return $this->GetDocumentTypeResult;
    }

    /**
     * @param GetDocumentTypeResult $GetDocumentTypeResult
     * @return GetDocumentTypeResponse
     */
    public function setGetDocumentTypeResult($GetDocumentTypeResult)
    {
        $this->GetDocumentTypeResult = $GetDocumentTypeResult;
        return $this;
    }

}
