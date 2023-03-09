<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP;

class SetEmailBodyByIDResponse
{

    /**
     * @var boolean $SetEmailBodyByIDResult
     */
    protected $SetEmailBodyByIDResult = null;

    /**
     * @param boolean $SetEmailBodyByIDResult
     */
    public function __construct($SetEmailBodyByIDResult = null)
    {
      $this->SetEmailBodyByIDResult = $SetEmailBodyByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmailBodyByIDResult()
    {
      return $this->SetEmailBodyByIDResult;
    }

    /**
     * @param boolean $SetEmailBodyByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP\SetEmailBodyByIDResponse
     */
    public function setSetEmailBodyByIDResult($SetEmailBodyByIDResult)
    {
      $this->SetEmailBodyByIDResult = $SetEmailBodyByIDResult;
      return $this;
    }

}
