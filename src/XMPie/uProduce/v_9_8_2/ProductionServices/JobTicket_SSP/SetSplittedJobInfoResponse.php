<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetSplittedJobInfoResponse
{

    /**
     * @var boolean $SetSplittedJobInfoResult
     */
    protected $SetSplittedJobInfoResult = null;

    /**
     * @param boolean $SetSplittedJobInfoResult
     */
    public function __construct($SetSplittedJobInfoResult = null)
    {
        $this->SetSplittedJobInfoResult = $SetSplittedJobInfoResult;
    }

    /**
     * @return boolean
     */
    public function getSetSplittedJobInfoResult()
    {
        return $this->SetSplittedJobInfoResult;
    }

    /**
     * @param boolean $SetSplittedJobInfoResult
     * @return SetSplittedJobInfoResponse
     */
    public function setSetSplittedJobInfoResult($SetSplittedJobInfoResult)
    {
        $this->SetSplittedJobInfoResult = $SetSplittedJobInfoResult;
        return $this;
    }

}
