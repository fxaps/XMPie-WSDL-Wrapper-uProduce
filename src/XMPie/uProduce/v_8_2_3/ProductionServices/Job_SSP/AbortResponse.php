<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Job_SSP;

class AbortResponse
{

    /**
     * @var boolean $AbortResult
     */
    protected $AbortResult = null;

    /**
     * @param boolean $AbortResult
     */
    public function __construct($AbortResult = null)
    {
        $this->AbortResult = $AbortResult;
    }

    /**
     * @return boolean
     */
    public function getAbortResult()
    {
        return $this->AbortResult;
    }

    /**
     * @param boolean $AbortResult
     * @return AbortResponse
     */
    public function setAbortResult($AbortResult)
    {
        $this->AbortResult = $AbortResult;
        return $this;
    }

}
