<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetDocumentsResponse
{

    /**
     * @var ArrayOfString $GetDocumentsResult
     */
    protected $GetDocumentsResult = null;

    /**
     * @param ArrayOfString $GetDocumentsResult
     */
    public function __construct($GetDocumentsResult = null)
    {
        $this->GetDocumentsResult = $GetDocumentsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetDocumentsResult()
    {
        return $this->GetDocumentsResult;
    }

    /**
     * @param ArrayOfString $GetDocumentsResult
     * @return GetDocumentsResponse
     */
    public function setGetDocumentsResult($GetDocumentsResult)
    {
        $this->GetDocumentsResult = $GetDocumentsResult;
        return $this;
    }

}
