<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP;

class AddRemoteCopyByIDResponse
{

    /**
     * @var boolean $AddRemoteCopyByIDResult
     */
    protected $AddRemoteCopyByIDResult = null;

    /**
     * @param boolean $AddRemoteCopyByIDResult
     */
    public function __construct($AddRemoteCopyByIDResult = null)
    {
      $this->AddRemoteCopyByIDResult = $AddRemoteCopyByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddRemoteCopyByIDResult()
    {
      return $this->AddRemoteCopyByIDResult;
    }

    /**
     * @param boolean $AddRemoteCopyByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP\AddRemoteCopyByIDResponse
     */
    public function setAddRemoteCopyByIDResult($AddRemoteCopyByIDResult)
    {
      $this->AddRemoteCopyByIDResult = $AddRemoteCopyByIDResult;
      return $this;
    }

}
