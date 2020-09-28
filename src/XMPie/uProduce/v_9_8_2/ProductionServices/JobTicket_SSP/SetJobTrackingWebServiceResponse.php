<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetJobTrackingWebServiceResponse
{

    /**
     * @var boolean $SetJobTrackingWebServiceResult
     */
    protected $SetJobTrackingWebServiceResult = null;

    /**
     * @param boolean $SetJobTrackingWebServiceResult
     */
    public function __construct($SetJobTrackingWebServiceResult = null)
    {
        $this->SetJobTrackingWebServiceResult = $SetJobTrackingWebServiceResult;
    }

    /**
     * @return boolean
     */
    public function getSetJobTrackingWebServiceResult()
    {
        return $this->SetJobTrackingWebServiceResult;
    }

    /**
     * @param boolean $SetJobTrackingWebServiceResult
     * @return SetJobTrackingWebServiceResponse
     */
    public function setSetJobTrackingWebServiceResult($SetJobTrackingWebServiceResult)
    {
        $this->SetJobTrackingWebServiceResult = $SetJobTrackingWebServiceResult;
        return $this;
    }

}
