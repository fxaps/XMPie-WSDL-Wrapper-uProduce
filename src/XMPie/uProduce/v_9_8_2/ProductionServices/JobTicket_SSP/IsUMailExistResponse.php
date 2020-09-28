<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class IsUMailExistResponse
{

    /**
     * @var boolean $IsUMailExistResult
     */
    protected $IsUMailExistResult = null;

    /**
     * @param boolean $IsUMailExistResult
     */
    public function __construct($IsUMailExistResult = null)
    {
        $this->IsUMailExistResult = $IsUMailExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsUMailExistResult()
    {
        return $this->IsUMailExistResult;
    }

    /**
     * @param boolean $IsUMailExistResult
     * @return IsUMailExistResponse
     */
    public function setIsUMailExistResult($IsUMailExistResult)
    {
        $this->IsUMailExistResult = $IsUMailExistResult;
        return $this;
    }

}
