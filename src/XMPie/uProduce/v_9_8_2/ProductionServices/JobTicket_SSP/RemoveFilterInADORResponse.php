<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveFilterInADORResponse
{

    /**
     * @var boolean $RemoveFilterInADORResult
     */
    protected $RemoveFilterInADORResult = null;

    /**
     * @param boolean $RemoveFilterInADORResult
     */
    public function __construct($RemoveFilterInADORResult = null)
    {
        $this->RemoveFilterInADORResult = $RemoveFilterInADORResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveFilterInADORResult()
    {
        return $this->RemoveFilterInADORResult;
    }

    /**
     * @param boolean $RemoveFilterInADORResult
     * @return RemoveFilterInADORResponse
     */
    public function setRemoveFilterInADORResult($RemoveFilterInADORResult)
    {
        $this->RemoveFilterInADORResult = $RemoveFilterInADORResult;
        return $this;
    }

}
