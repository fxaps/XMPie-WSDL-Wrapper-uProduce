<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveFTPResponse
{

    /**
     * @var boolean $RemoveFTPResult
     */
    protected $RemoveFTPResult = null;

    /**
     * @param boolean $RemoveFTPResult
     */
    public function __construct($RemoveFTPResult = null)
    {
        $this->RemoveFTPResult = $RemoveFTPResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveFTPResult()
    {
        return $this->RemoveFTPResult;
    }

    /**
     * @param boolean $RemoveFTPResult
     * @return RemoveFTPResponse
     */
    public function setRemoveFTPResult($RemoveFTPResult)
    {
        $this->RemoveFTPResult = $RemoveFTPResult;
        return $this;
    }

}
