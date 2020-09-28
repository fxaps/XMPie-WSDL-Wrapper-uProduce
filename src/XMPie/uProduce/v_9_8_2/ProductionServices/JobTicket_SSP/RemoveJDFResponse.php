<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveJDFResponse
{

    /**
     * @var boolean $RemoveJDFResult
     */
    protected $RemoveJDFResult = null;

    /**
     * @param boolean $RemoveJDFResult
     */
    public function __construct($RemoveJDFResult = null)
    {
        $this->RemoveJDFResult = $RemoveJDFResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveJDFResult()
    {
        return $this->RemoveJDFResult;
    }

    /**
     * @param boolean $RemoveJDFResult
     * @return RemoveJDFResponse
     */
    public function setRemoveJDFResult($RemoveJDFResult)
    {
        $this->RemoveJDFResult = $RemoveJDFResult;
        return $this;
    }

}
