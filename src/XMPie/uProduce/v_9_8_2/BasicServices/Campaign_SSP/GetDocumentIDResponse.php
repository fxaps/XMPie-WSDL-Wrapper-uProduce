<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

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
     * @return GetDocumentIDResponse
     */
    public function setGetDocumentIDResult($GetDocumentIDResult)
    {
        $this->GetDocumentIDResult = $GetDocumentIDResult;
        return $this;
    }

}
