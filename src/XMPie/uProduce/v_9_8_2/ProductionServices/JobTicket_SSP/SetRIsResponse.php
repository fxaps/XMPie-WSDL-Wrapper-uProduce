<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetRIsResponse
{

    /**
     * @var boolean $SetRIsResult
     */
    protected $SetRIsResult = null;

    /**
     * @param boolean $SetRIsResult
     */
    public function __construct($SetRIsResult = null)
    {
        $this->SetRIsResult = $SetRIsResult;
    }

    /**
     * @return boolean
     */
    public function getSetRIsResult()
    {
        return $this->SetRIsResult;
    }

    /**
     * @param boolean $SetRIsResult
     * @return SetRIsResponse
     */
    public function setSetRIsResult($SetRIsResult)
    {
        $this->SetRIsResult = $SetRIsResult;
        return $this;
    }

}
