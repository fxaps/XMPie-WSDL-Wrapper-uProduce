<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetJobReportingWebServiceResponse
{

    /**
     * @var boolean $SetJobReportingWebServiceResult
     */
    protected $SetJobReportingWebServiceResult = null;

    /**
     * @param boolean $SetJobReportingWebServiceResult
     */
    public function __construct($SetJobReportingWebServiceResult = null)
    {
        $this->SetJobReportingWebServiceResult = $SetJobReportingWebServiceResult;
    }

    /**
     * @return boolean
     */
    public function getSetJobReportingWebServiceResult()
    {
        return $this->SetJobReportingWebServiceResult;
    }

    /**
     * @param boolean $SetJobReportingWebServiceResult
     * @return SetJobReportingWebServiceResponse
     */
    public function setSetJobReportingWebServiceResult($SetJobReportingWebServiceResult)
    {
        $this->SetJobReportingWebServiceResult = $SetJobReportingWebServiceResult;
        return $this;
    }

}
