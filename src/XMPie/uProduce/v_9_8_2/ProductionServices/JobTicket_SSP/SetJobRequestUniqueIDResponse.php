<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetJobRequestUniqueIDResponse
{

    /**
     * @var boolean $SetJobRequestUniqueIDResult
     */
    protected $SetJobRequestUniqueIDResult = null;

    /**
     * @param boolean $SetJobRequestUniqueIDResult
     */
    public function __construct($SetJobRequestUniqueIDResult = null)
    {
      $this->SetJobRequestUniqueIDResult = $SetJobRequestUniqueIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetJobRequestUniqueIDResult()
    {
      return $this->SetJobRequestUniqueIDResult;
    }

    /**
     * @param boolean $SetJobRequestUniqueIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP\SetJobRequestUniqueIDResponse
     */
    public function setSetJobRequestUniqueIDResult($SetJobRequestUniqueIDResult)
    {
      $this->SetJobRequestUniqueIDResult = $SetJobRequestUniqueIDResult;
      return $this;
    }

}
