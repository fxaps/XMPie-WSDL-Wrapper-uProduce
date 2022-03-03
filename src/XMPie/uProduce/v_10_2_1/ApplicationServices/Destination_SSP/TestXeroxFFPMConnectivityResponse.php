<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ApplicationServices\Destination_SSP;

class TestXeroxFFPMConnectivityResponse
{

    /**
     * @var boolean $TestXeroxFFPMConnectivityResult
     */
    protected $TestXeroxFFPMConnectivityResult = null;

    /**
     * @param boolean $TestXeroxFFPMConnectivityResult
     */
    public function __construct($TestXeroxFFPMConnectivityResult = null)
    {
      $this->TestXeroxFFPMConnectivityResult = $TestXeroxFFPMConnectivityResult;
    }

    /**
     * @return boolean
     */
    public function getTestXeroxFFPMConnectivityResult()
    {
      return $this->TestXeroxFFPMConnectivityResult;
    }

    /**
     * @param boolean $TestXeroxFFPMConnectivityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ApplicationServices\Destination_SSP\TestXeroxFFPMConnectivityResponse
     */
    public function setTestXeroxFFPMConnectivityResult($TestXeroxFFPMConnectivityResult)
    {
      $this->TestXeroxFFPMConnectivityResult = $TestXeroxFFPMConnectivityResult;
      return $this;
    }

}
