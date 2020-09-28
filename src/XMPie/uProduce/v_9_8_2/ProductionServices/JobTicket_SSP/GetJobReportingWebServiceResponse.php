<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetJobReportingWebServiceResponse
{

    /**
     * @var string $GetJobReportingWebServiceResult
     */
    protected $GetJobReportingWebServiceResult = null;

    /**
     * @param string $GetJobReportingWebServiceResult
     */
    public function __construct($GetJobReportingWebServiceResult = null)
    {
        $this->GetJobReportingWebServiceResult = $GetJobReportingWebServiceResult;
    }

    /**
     * @return string
     */
    public function getGetJobReportingWebServiceResult()
    {
        return $this->GetJobReportingWebServiceResult;
    }

    /**
     * @param string $GetJobReportingWebServiceResult
     * @return GetJobReportingWebServiceResponse
     */
    public function setGetJobReportingWebServiceResult($GetJobReportingWebServiceResult)
    {
        $this->GetJobReportingWebServiceResult = $GetJobReportingWebServiceResult;
        return $this;
    }

}
