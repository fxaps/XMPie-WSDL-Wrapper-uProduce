<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetOutputFileNameResponse
{

    /**
     * @var boolean $SetOutputFileNameResult
     */
    protected $SetOutputFileNameResult = null;

    /**
     * @param boolean $SetOutputFileNameResult
     */
    public function __construct($SetOutputFileNameResult = null)
    {
        $this->SetOutputFileNameResult = $SetOutputFileNameResult;
    }

    /**
     * @return boolean
     */
    public function getSetOutputFileNameResult()
    {
        return $this->SetOutputFileNameResult;
    }

    /**
     * @param boolean $SetOutputFileNameResult
     * @return SetOutputFileNameResponse
     */
    public function setSetOutputFileNameResult($SetOutputFileNameResult)
    {
        $this->SetOutputFileNameResult = $SetOutputFileNameResult;
        return $this;
    }

}
