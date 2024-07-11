<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

class SetProcessEmailOutputTypeResponse
{

    /**
     * @var boolean $SetProcessEmailOutputTypeResult
     */
    protected $SetProcessEmailOutputTypeResult = null;

    /**
     * @param boolean $SetProcessEmailOutputTypeResult
     */
    public function __construct($SetProcessEmailOutputTypeResult = null)
    {
      $this->SetProcessEmailOutputTypeResult = $SetProcessEmailOutputTypeResult;
    }

    /**
     * @return boolean
     */
    public function getSetProcessEmailOutputTypeResult()
    {
      return $this->SetProcessEmailOutputTypeResult;
    }

    /**
     * @param boolean $SetProcessEmailOutputTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\SetProcessEmailOutputTypeResponse
     */
    public function setSetProcessEmailOutputTypeResult($SetProcessEmailOutputTypeResult)
    {
      $this->SetProcessEmailOutputTypeResult = $SetProcessEmailOutputTypeResult;
      return $this;
    }

}
