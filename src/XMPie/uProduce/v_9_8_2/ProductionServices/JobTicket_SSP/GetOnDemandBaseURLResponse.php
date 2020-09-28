<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetOnDemandBaseURLResponse
{

    /**
     * @var string $GetOnDemandBaseURLResult
     */
    protected $GetOnDemandBaseURLResult = null;

    /**
     * @param string $GetOnDemandBaseURLResult
     */
    public function __construct($GetOnDemandBaseURLResult = null)
    {
        $this->GetOnDemandBaseURLResult = $GetOnDemandBaseURLResult;
    }

    /**
     * @return string
     */
    public function getGetOnDemandBaseURLResult()
    {
        return $this->GetOnDemandBaseURLResult;
    }

    /**
     * @param string $GetOnDemandBaseURLResult
     * @return GetOnDemandBaseURLResponse
     */
    public function setGetOnDemandBaseURLResult($GetOnDemandBaseURLResult)
    {
        $this->GetOnDemandBaseURLResult = $GetOnDemandBaseURLResult;
        return $this;
    }

}
