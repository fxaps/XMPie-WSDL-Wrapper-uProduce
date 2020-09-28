<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetRIResponse
{

    /**
     * @var boolean $SetRIResult
     */
    protected $SetRIResult = null;

    /**
     * @param boolean $SetRIResult
     */
    public function __construct($SetRIResult = null)
    {
        $this->SetRIResult = $SetRIResult;
    }

    /**
     * @return boolean
     */
    public function getSetRIResult()
    {
        return $this->SetRIResult;
    }

    /**
     * @param boolean $SetRIResult
     * @return SetRIResponse
     */
    public function setSetRIResult($SetRIResult)
    {
        $this->SetRIResult = $SetRIResult;
        return $this;
    }

}
