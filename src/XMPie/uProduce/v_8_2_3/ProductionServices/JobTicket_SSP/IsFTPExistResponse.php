<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP;

class IsFTPExistResponse
{

    /**
     * @var boolean $IsFTPExistResult
     */
    protected $IsFTPExistResult = null;

    /**
     * @param boolean $IsFTPExistResult
     */
    public function __construct($IsFTPExistResult = null)
    {
      $this->IsFTPExistResult = $IsFTPExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsFTPExistResult()
    {
      return $this->IsFTPExistResult;
    }

    /**
     * @param boolean $IsFTPExistResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\IsFTPExistResponse
     */
    public function setIsFTPExistResult($IsFTPExistResult)
    {
      $this->IsFTPExistResult = $IsFTPExistResult;
      return $this;
    }

}
