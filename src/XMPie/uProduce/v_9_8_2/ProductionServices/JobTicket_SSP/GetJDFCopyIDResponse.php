<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetJDFCopyIDResponse
{

    /**
     * @var string $GetJDFCopyIDResult
     */
    protected $GetJDFCopyIDResult = null;

    /**
     * @param string $GetJDFCopyIDResult
     */
    public function __construct($GetJDFCopyIDResult = null)
    {
        $this->GetJDFCopyIDResult = $GetJDFCopyIDResult;
    }

    /**
     * @return string
     */
    public function getGetJDFCopyIDResult()
    {
        return $this->GetJDFCopyIDResult;
    }

    /**
     * @param string $GetJDFCopyIDResult
     * @return GetJDFCopyIDResponse
     */
    public function setGetJDFCopyIDResult($GetJDFCopyIDResult)
    {
        $this->GetJDFCopyIDResult = $GetJDFCopyIDResult;
        return $this;
    }

}
