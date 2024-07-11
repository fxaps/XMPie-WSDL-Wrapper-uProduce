<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Customer_SSP;

class GetConfigFileIDResponse
{

    /**
     * @var string $GetConfigFileIDResult
     */
    protected $GetConfigFileIDResult = null;

    /**
     * @param string $GetConfigFileIDResult
     */
    public function __construct($GetConfigFileIDResult = null)
    {
      $this->GetConfigFileIDResult = $GetConfigFileIDResult;
    }

    /**
     * @return string
     */
    public function getGetConfigFileIDResult()
    {
      return $this->GetConfigFileIDResult;
    }

    /**
     * @param string $GetConfigFileIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Customer_SSP\GetConfigFileIDResponse
     */
    public function setGetConfigFileIDResult($GetConfigFileIDResult)
    {
      $this->GetConfigFileIDResult = $GetConfigFileIDResult;
      return $this;
    }

}
