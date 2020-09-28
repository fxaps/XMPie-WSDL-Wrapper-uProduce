<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetFilterInADORsResponse
{

    /**
     * @var boolean $SetFilterInADORsResult
     */
    protected $SetFilterInADORsResult = null;

    /**
     * @param boolean $SetFilterInADORsResult
     */
    public function __construct($SetFilterInADORsResult = null)
    {
        $this->SetFilterInADORsResult = $SetFilterInADORsResult;
    }

    /**
     * @return boolean
     */
    public function getSetFilterInADORsResult()
    {
        return $this->SetFilterInADORsResult;
    }

    /**
     * @param boolean $SetFilterInADORsResult
     * @return SetFilterInADORsResponse
     */
    public function setSetFilterInADORsResult($SetFilterInADORsResult)
    {
        $this->SetFilterInADORsResult = $SetFilterInADORsResult;
        return $this;
    }

}
