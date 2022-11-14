<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP;

class GetDocumentIDResponse
{

    /**
     * @var string $GetDocumentIDResult
     */
    protected $GetDocumentIDResult = null;

    /**
     * @param string $GetDocumentIDResult
     */
    public function __construct($GetDocumentIDResult = null)
    {
      $this->GetDocumentIDResult = $GetDocumentIDResult;
    }

    /**
     * @return string
     */
    public function getGetDocumentIDResult()
    {
      return $this->GetDocumentIDResult;
    }

    /**
     * @param string $GetDocumentIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP\GetDocumentIDResponse
     */
    public function setGetDocumentIDResult($GetDocumentIDResult)
    {
      $this->GetDocumentIDResult = $GetDocumentIDResult;
      return $this;
    }

}
