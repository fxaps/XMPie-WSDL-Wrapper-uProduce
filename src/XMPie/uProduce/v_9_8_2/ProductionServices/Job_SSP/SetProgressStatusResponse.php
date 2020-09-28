<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Job_SSP;

class SetProgressStatusResponse
{

    /**
     * @var boolean $SetProgressStatusResult
     */
    protected $SetProgressStatusResult = null;

    /**
     * @param boolean $SetProgressStatusResult
     */
    public function __construct($SetProgressStatusResult = null)
    {
        $this->SetProgressStatusResult = $SetProgressStatusResult;
    }

    /**
     * @return boolean
     */
    public function getSetProgressStatusResult()
    {
        return $this->SetProgressStatusResult;
    }

    /**
     * @param boolean $SetProgressStatusResult
     * @return SetProgressStatusResponse
     */
    public function setSetProgressStatusResult($SetProgressStatusResult)
    {
        $this->SetProgressStatusResult = $SetProgressStatusResult;
        return $this;
    }

}
