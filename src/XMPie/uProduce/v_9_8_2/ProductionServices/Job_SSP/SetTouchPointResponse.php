<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Job_SSP;

class SetTouchPointResponse
{

    /**
     * @var boolean $SetTouchPointResult
     */
    protected $SetTouchPointResult = null;

    /**
     * @param boolean $SetTouchPointResult
     */
    public function __construct($SetTouchPointResult = null)
    {
        $this->SetTouchPointResult = $SetTouchPointResult;
    }

    /**
     * @return boolean
     */
    public function getSetTouchPointResult()
    {
        return $this->SetTouchPointResult;
    }

    /**
     * @param boolean $SetTouchPointResult
     * @return SetTouchPointResponse
     */
    public function setSetTouchPointResult($SetTouchPointResult)
    {
        $this->SetTouchPointResult = $SetTouchPointResult;
        return $this;
    }

}
