<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP;

class GetDocumentStorageTypeXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDocumentStorageTypeXMPTblDataSetResult
     */
    protected $GetDocumentStorageTypeXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDocumentStorageTypeXMPTblDataSetResult
     */
    public function __construct($GetDocumentStorageTypeXMPTblDataSetResult = null)
    {
      $this->GetDocumentStorageTypeXMPTblDataSetResult = $GetDocumentStorageTypeXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDocumentStorageTypeXMPTblDataSetResult()
    {
      return $this->GetDocumentStorageTypeXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDocumentStorageTypeXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\GetDocumentStorageTypeXMPTblDataSetResponse
     */
    public function setGetDocumentStorageTypeXMPTblDataSetResult($GetDocumentStorageTypeXMPTblDataSetResult)
    {
      $this->GetDocumentStorageTypeXMPTblDataSetResult = $GetDocumentStorageTypeXMPTblDataSetResult;
      return $this;
    }

}
