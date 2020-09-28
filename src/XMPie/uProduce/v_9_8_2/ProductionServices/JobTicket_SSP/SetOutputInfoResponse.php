<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetOutputInfoResponse
{

    /**
     * @var boolean $SetOutputInfoResult
     */
    protected $SetOutputInfoResult = null;

    /**
     * @param boolean $SetOutputInfoResult
     */
    public function __construct($SetOutputInfoResult = null)
    {
        $this->SetOutputInfoResult = $SetOutputInfoResult;
    }

    /**
     * @return boolean
     */
    public function getSetOutputInfoResult()
    {
        return $this->SetOutputInfoResult;
    }

    /**
     * @param boolean $SetOutputInfoResult
     * @return SetOutputInfoResponse
     */
    public function setSetOutputInfoResult($SetOutputInfoResult)
    {
        $this->SetOutputInfoResult = $SetOutputInfoResult;
        return $this;
    }

}
