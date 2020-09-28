<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ApplicationServices\Destination_SSP;

class TestNetworkPathConnectivityResponse
{

    /**
     * @var boolean $TestNetworkPathConnectivityResult
     */
    protected $TestNetworkPathConnectivityResult = null;

    /**
     * @param boolean $TestNetworkPathConnectivityResult
     */
    public function __construct($TestNetworkPathConnectivityResult = null)
    {
      $this->TestNetworkPathConnectivityResult = $TestNetworkPathConnectivityResult;
    }

    /**
     * @return boolean
     */
    public function getTestNetworkPathConnectivityResult()
    {
      return $this->TestNetworkPathConnectivityResult;
    }

    /**
     * @param boolean $TestNetworkPathConnectivityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityResponse
     */
    public function setTestNetworkPathConnectivityResult($TestNetworkPathConnectivityResult)
    {
      $this->TestNetworkPathConnectivityResult = $TestNetworkPathConnectivityResult;
      return $this;
    }

}
