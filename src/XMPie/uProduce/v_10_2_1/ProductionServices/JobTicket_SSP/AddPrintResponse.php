<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\JobTicket_SSP;

class AddPrintResponse
{

    /**
     * @var boolean $AddPrintResult
     */
    protected $AddPrintResult = null;

    /**
     * @param boolean $AddPrintResult
     */
    public function __construct($AddPrintResult = null)
    {
      $this->AddPrintResult = $AddPrintResult;
    }

    /**
     * @return boolean
     */
    public function getAddPrintResult()
    {
      return $this->AddPrintResult;
    }

    /**
     * @param boolean $AddPrintResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\JobTicket_SSP\AddPrintResponse
     */
    public function setAddPrintResult($AddPrintResult)
    {
      $this->AddPrintResult = $AddPrintResult;
      return $this;
    }

}
