<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\OtherServices\GeneralUtils_SSP;

class IsFlashCompatibleResponse
{

    /**
     * @var boolean $IsFlashCompatibleResult
     */
    protected $IsFlashCompatibleResult = null;

    /**
     * @param boolean $IsFlashCompatibleResult
     */
    public function __construct($IsFlashCompatibleResult = null)
    {
      $this->IsFlashCompatibleResult = $IsFlashCompatibleResult;
    }

    /**
     * @return boolean
     */
    public function getIsFlashCompatibleResult()
    {
      return $this->IsFlashCompatibleResult;
    }

    /**
     * @param boolean $IsFlashCompatibleResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\OtherServices\GeneralUtils_SSP\IsFlashCompatibleResponse
     */
    public function setIsFlashCompatibleResult($IsFlashCompatibleResult)
    {
      $this->IsFlashCompatibleResult = $IsFlashCompatibleResult;
      return $this;
    }

}
