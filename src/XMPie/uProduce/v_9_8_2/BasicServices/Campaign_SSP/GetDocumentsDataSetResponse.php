<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetDocumentsDataSetResponse
{

    /**
     * @var GetDocumentsDataSetResult $GetDocumentsDataSetResult
     */
    protected $GetDocumentsDataSetResult = null;

    /**
     * @param GetDocumentsDataSetResult $GetDocumentsDataSetResult
     */
    public function __construct($GetDocumentsDataSetResult = null)
    {
        $this->GetDocumentsDataSetResult = $GetDocumentsDataSetResult;
    }

    /**
     * @return GetDocumentsDataSetResult
     */
    public function getGetDocumentsDataSetResult()
    {
        return $this->GetDocumentsDataSetResult;
    }

    /**
     * @param GetDocumentsDataSetResult $GetDocumentsDataSetResult
     * @return GetDocumentsDataSetResponse
     */
    public function setGetDocumentsDataSetResult($GetDocumentsDataSetResult)
    {
        $this->GetDocumentsDataSetResult = $GetDocumentsDataSetResult;
        return $this;
    }

}
