<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveUMailResponse
{

    /**
     * @var boolean $RemoveUMailResult
     */
    protected $RemoveUMailResult = null;

    /**
     * @param boolean $RemoveUMailResult
     */
    public function __construct($RemoveUMailResult = null)
    {
        $this->RemoveUMailResult = $RemoveUMailResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveUMailResult()
    {
        return $this->RemoveUMailResult;
    }

    /**
     * @param boolean $RemoveUMailResult
     * @return RemoveUMailResponse
     */
    public function setRemoveUMailResult($RemoveUMailResult)
    {
        $this->RemoveUMailResult = $RemoveUMailResult;
        return $this;
    }

}
