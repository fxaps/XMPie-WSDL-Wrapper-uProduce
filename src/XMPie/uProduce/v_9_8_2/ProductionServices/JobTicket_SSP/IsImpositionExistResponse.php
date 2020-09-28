<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class IsImpositionExistResponse
{

    /**
     * @var boolean $IsImpositionExistResult
     */
    protected $IsImpositionExistResult = null;

    /**
     * @param boolean $IsImpositionExistResult
     */
    public function __construct($IsImpositionExistResult = null)
    {
        $this->IsImpositionExistResult = $IsImpositionExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsImpositionExistResult()
    {
        return $this->IsImpositionExistResult;
    }

    /**
     * @param boolean $IsImpositionExistResult
     * @return IsImpositionExistResponse
     */
    public function setIsImpositionExistResult($IsImpositionExistResult)
    {
        $this->IsImpositionExistResult = $IsImpositionExistResult;
        return $this;
    }

}
