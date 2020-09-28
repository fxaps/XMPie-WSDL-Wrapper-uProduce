<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetWebResourcesBasePathResponse
{

    /**
     * @var boolean $SetWebResourcesBasePathResult
     */
    protected $SetWebResourcesBasePathResult = null;

    /**
     * @param boolean $SetWebResourcesBasePathResult
     */
    public function __construct($SetWebResourcesBasePathResult = null)
    {
        $this->SetWebResourcesBasePathResult = $SetWebResourcesBasePathResult;
    }

    /**
     * @return boolean
     */
    public function getSetWebResourcesBasePathResult()
    {
        return $this->SetWebResourcesBasePathResult;
    }

    /**
     * @param boolean $SetWebResourcesBasePathResult
     * @return SetWebResourcesBasePathResponse
     */
    public function setSetWebResourcesBasePathResult($SetWebResourcesBasePathResult)
    {
        $this->SetWebResourcesBasePathResult = $SetWebResourcesBasePathResult;
        return $this;
    }

}
