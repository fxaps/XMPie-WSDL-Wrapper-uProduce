<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Asset_SSP;

class SetPropertyResponse
{

    /**
     * @var boolean $SetPropertyResult
     */
    protected $SetPropertyResult = null;

    /**
     * @param boolean $SetPropertyResult
     */
    public function __construct($SetPropertyResult = null)
    {
      $this->SetPropertyResult = $SetPropertyResult;
    }

    /**
     * @return boolean
     */
    public function getSetPropertyResult()
    {
      return $this->SetPropertyResult;
    }

    /**
     * @param boolean $SetPropertyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Asset_SSP\SetPropertyResponse
     */
    public function setSetPropertyResult($SetPropertyResult)
    {
      $this->SetPropertyResult = $SetPropertyResult;
      return $this;
    }

}
