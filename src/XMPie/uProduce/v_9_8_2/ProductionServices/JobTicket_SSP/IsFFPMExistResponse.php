<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class IsFFPMExistResponse
{

    /**
     * @var boolean $IsFFPMExistResult
     */
    protected $IsFFPMExistResult = null;

    /**
     * @param boolean $IsFFPMExistResult
     */
    public function __construct($IsFFPMExistResult = null)
    {
        $this->IsFFPMExistResult = $IsFFPMExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsFFPMExistResult()
    {
        return $this->IsFFPMExistResult;
    }

    /**
     * @param boolean $IsFFPMExistResult
     * @return IsFFPMExistResponse
     */
    public function setIsFFPMExistResult($IsFFPMExistResult)
    {
        $this->IsFFPMExistResult = $IsFFPMExistResult;
        return $this;
    }

}
