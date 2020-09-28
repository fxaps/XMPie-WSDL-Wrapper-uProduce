<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Campaign_SSP;

class GetTrackedADORNamesResponse
{

    /**
     * @var ArrayOfString $GetTrackedADORNamesResult
     */
    protected $GetTrackedADORNamesResult = null;

    /**
     * @param ArrayOfString $GetTrackedADORNamesResult
     */
    public function __construct($GetTrackedADORNamesResult = null)
    {
      $this->GetTrackedADORNamesResult = $GetTrackedADORNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetTrackedADORNamesResult()
    {
      return $this->GetTrackedADORNamesResult;
    }

    /**
     * @param ArrayOfString $GetTrackedADORNamesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Campaign_SSP\GetTrackedADORNamesResponse
     */
    public function setGetTrackedADORNamesResult($GetTrackedADORNamesResult)
    {
      $this->GetTrackedADORNamesResult = $GetTrackedADORNamesResult;
      return $this;
    }

}
