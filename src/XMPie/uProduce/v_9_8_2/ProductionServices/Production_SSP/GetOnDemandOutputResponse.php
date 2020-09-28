<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Production_SSP;

class GetOnDemandOutputResponse
{

    /**
     * @var OnDemandOutputResult $GetOnDemandOutputResult
     */
    protected $GetOnDemandOutputResult = null;

    /**
     * @param OnDemandOutputResult $GetOnDemandOutputResult
     */
    public function __construct($GetOnDemandOutputResult = null)
    {
        $this->GetOnDemandOutputResult = $GetOnDemandOutputResult;
    }

    /**
     * @return OnDemandOutputResult
     */
    public function getGetOnDemandOutputResult()
    {
        return $this->GetOnDemandOutputResult;
    }

    /**
     * @param OnDemandOutputResult $GetOnDemandOutputResult
     * @return GetOnDemandOutputResponse
     */
    public function setGetOnDemandOutputResult($GetOnDemandOutputResult)
    {
        $this->GetOnDemandOutputResult = $GetOnDemandOutputResult;
        return $this;
    }

}
