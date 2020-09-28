<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetFilterInADORResponse
{

    /**
     * @var boolean $SetFilterInADORResult
     */
    protected $SetFilterInADORResult = null;

    /**
     * @param boolean $SetFilterInADORResult
     */
    public function __construct($SetFilterInADORResult = null)
    {
        $this->SetFilterInADORResult = $SetFilterInADORResult;
    }

    /**
     * @return boolean
     */
    public function getSetFilterInADORResult()
    {
        return $this->SetFilterInADORResult;
    }

    /**
     * @param boolean $SetFilterInADORResult
     * @return SetFilterInADORResponse
     */
    public function setSetFilterInADORResult($SetFilterInADORResult)
    {
        $this->SetFilterInADORResult = $SetFilterInADORResult;
        return $this;
    }

}
