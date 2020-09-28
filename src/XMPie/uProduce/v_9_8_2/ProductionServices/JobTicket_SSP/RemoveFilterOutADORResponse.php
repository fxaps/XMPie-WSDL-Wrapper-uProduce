<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveFilterOutADORResponse
{

    /**
     * @var boolean $RemoveFilterOutADORResult
     */
    protected $RemoveFilterOutADORResult = null;

    /**
     * @param boolean $RemoveFilterOutADORResult
     */
    public function __construct($RemoveFilterOutADORResult = null)
    {
        $this->RemoveFilterOutADORResult = $RemoveFilterOutADORResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveFilterOutADORResult()
    {
        return $this->RemoveFilterOutADORResult;
    }

    /**
     * @param boolean $RemoveFilterOutADORResult
     * @return RemoveFilterOutADORResponse
     */
    public function setRemoveFilterOutADORResult($RemoveFilterOutADORResult)
    {
        $this->RemoveFilterOutADORResult = $RemoveFilterOutADORResult;
        return $this;
    }

}
