<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP;

class GetDocumentResourcesFolderResponse
{

    /**
     * @var string $GetDocumentResourcesFolderResult
     */
    protected $GetDocumentResourcesFolderResult = null;

    /**
     * @param string $GetDocumentResourcesFolderResult
     */
    public function __construct($GetDocumentResourcesFolderResult = null)
    {
      $this->GetDocumentResourcesFolderResult = $GetDocumentResourcesFolderResult;
    }

    /**
     * @return string
     */
    public function getGetDocumentResourcesFolderResult()
    {
      return $this->GetDocumentResourcesFolderResult;
    }

    /**
     * @param string $GetDocumentResourcesFolderResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP\GetDocumentResourcesFolderResponse
     */
    public function setGetDocumentResourcesFolderResult($GetDocumentResourcesFolderResult)
    {
      $this->GetDocumentResourcesFolderResult = $GetDocumentResourcesFolderResult;
      return $this;
    }

}
