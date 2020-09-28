<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\TouchPoint_SSP;

class SetNameResponse
{

    /**
     * @var boolean $SetNameResult
     */
    protected $SetNameResult = null;

    /**
     * @param boolean $SetNameResult
     */
    public function __construct($SetNameResult = null)
    {
        $this->SetNameResult = $SetNameResult;
    }

    /**
     * @return boolean
     */
    public function getSetNameResult()
    {
        return $this->SetNameResult;
    }

    /**
     * @param boolean $SetNameResult
     * @return SetNameResponse
     */
    public function setSetNameResult($SetNameResult)
    {
        $this->SetNameResult = $SetNameResult;
        return $this;
    }

}
