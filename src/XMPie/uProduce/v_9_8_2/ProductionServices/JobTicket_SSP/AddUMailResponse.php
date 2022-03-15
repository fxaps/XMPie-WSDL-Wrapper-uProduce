<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddUMailResponse
{

    /**
     * @var boolean $AddUMailResult
     */
    protected $AddUMailResult = null;

    /**
     * @param boolean $AddUMailResult
     */
    public function __construct($AddUMailResult = null)
    {
      $this->AddUMailResult = $AddUMailResult;
    }

    /**
     * @return boolean
     */
    public function getAddUMailResult()
    {
      return $this->AddUMailResult;
    }

    /**
     * @param boolean $AddUMailResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP\AddUMailResponse
     */
    public function setAddUMailResult($AddUMailResult)
    {
      $this->AddUMailResult = $AddUMailResult;
      return $this;
    }

}
