<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetDocumentTypesResponse
{

    /**
     * @var GetDocumentTypesResult $GetDocumentTypesResult
     */
    protected $GetDocumentTypesResult = null;

    /**
     * @param GetDocumentTypesResult $GetDocumentTypesResult
     */
    public function __construct($GetDocumentTypesResult = null)
    {
        $this->GetDocumentTypesResult = $GetDocumentTypesResult;
    }

    /**
     * @return GetDocumentTypesResult
     */
    public function getGetDocumentTypesResult()
    {
        return $this->GetDocumentTypesResult;
    }

    /**
     * @param GetDocumentTypesResult $GetDocumentTypesResult
     * @return GetDocumentTypesResponse
     */
    public function setGetDocumentTypesResult($GetDocumentTypesResult)
    {
        $this->GetDocumentTypesResult = $GetDocumentTypesResult;
        return $this;
    }

}
