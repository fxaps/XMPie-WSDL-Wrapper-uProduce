<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class SuspendResponse
{

    /**
     * @var boolean $SuspendResult
     */
    protected $SuspendResult = null;

    /**
     * @param boolean $SuspendResult
     */
    public function __construct($SuspendResult = null)
    {
        $this->SuspendResult = $SuspendResult;
    }

    /**
     * @return boolean
     */
    public function getSuspendResult()
    {
        return $this->SuspendResult;
    }

    /**
     * @param boolean $SuspendResult
     * @return SuspendResponse
     */
    public function setSuspendResult($SuspendResult)
    {
        $this->SuspendResult = $SuspendResult;
        return $this;
    }

}
