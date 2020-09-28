<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetProcessEmailOutputTypeResponse
{

    /**
     * @var boolean $SetProcessEmailOutputTypeResult
     */
    protected $SetProcessEmailOutputTypeResult = null;

    /**
     * @param boolean $SetProcessEmailOutputTypeResult
     */
    public function __construct($SetProcessEmailOutputTypeResult = null)
    {
        $this->SetProcessEmailOutputTypeResult = $SetProcessEmailOutputTypeResult;
    }

    /**
     * @return boolean
     */
    public function getSetProcessEmailOutputTypeResult()
    {
        return $this->SetProcessEmailOutputTypeResult;
    }

    /**
     * @param boolean $SetProcessEmailOutputTypeResult
     * @return SetProcessEmailOutputTypeResponse
     */
    public function setSetProcessEmailOutputTypeResult($SetProcessEmailOutputTypeResult)
    {
        $this->SetProcessEmailOutputTypeResult = $SetProcessEmailOutputTypeResult;
        return $this;
    }

}
