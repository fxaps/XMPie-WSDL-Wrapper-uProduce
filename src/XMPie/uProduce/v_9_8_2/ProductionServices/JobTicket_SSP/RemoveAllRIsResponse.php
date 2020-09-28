<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveAllRIsResponse
{

    /**
     * @var boolean $RemoveAllRIsResult
     */
    protected $RemoveAllRIsResult = null;

    /**
     * @param boolean $RemoveAllRIsResult
     */
    public function __construct($RemoveAllRIsResult = null)
    {
        $this->RemoveAllRIsResult = $RemoveAllRIsResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllRIsResult()
    {
        return $this->RemoveAllRIsResult;
    }

    /**
     * @param boolean $RemoveAllRIsResult
     * @return RemoveAllRIsResponse
     */
    public function setRemoveAllRIsResult($RemoveAllRIsResult)
    {
        $this->RemoveAllRIsResult = $RemoveAllRIsResult;
        return $this;
    }

}
