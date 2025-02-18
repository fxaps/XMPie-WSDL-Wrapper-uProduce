<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\SystemManager_SSP;

class GetDistillJobOptionNamesResponse
{

    /**
     * @var ArrayOfString $GetDistillJobOptionNamesResult
     */
    protected $GetDistillJobOptionNamesResult = null;

    /**
     * @param ArrayOfString $GetDistillJobOptionNamesResult
     */
    public function __construct($GetDistillJobOptionNamesResult = null)
    {
      $this->GetDistillJobOptionNamesResult = $GetDistillJobOptionNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetDistillJobOptionNamesResult()
    {
      return $this->GetDistillJobOptionNamesResult;
    }

    /**
     * @param ArrayOfString $GetDistillJobOptionNamesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\SystemManager_SSP\GetDistillJobOptionNamesResponse
     */
    public function setGetDistillJobOptionNamesResult($GetDistillJobOptionNamesResult)
    {
      $this->GetDistillJobOptionNamesResult = $GetDistillJobOptionNamesResult;
      return $this;
    }

}
