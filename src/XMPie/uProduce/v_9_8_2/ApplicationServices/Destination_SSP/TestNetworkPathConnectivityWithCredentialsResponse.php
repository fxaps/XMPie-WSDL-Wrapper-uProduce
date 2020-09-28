<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP;

class TestNetworkPathConnectivityWithCredentialsResponse
{

    /**
     * @var boolean $TestNetworkPathConnectivityWithCredentialsResult
     */
    protected $TestNetworkPathConnectivityWithCredentialsResult = null;

    /**
     * @param boolean $TestNetworkPathConnectivityWithCredentialsResult
     */
    public function __construct($TestNetworkPathConnectivityWithCredentialsResult = null)
    {
        $this->TestNetworkPathConnectivityWithCredentialsResult = $TestNetworkPathConnectivityWithCredentialsResult;
    }

    /**
     * @return boolean
     */
    public function getTestNetworkPathConnectivityWithCredentialsResult()
    {
        return $this->TestNetworkPathConnectivityWithCredentialsResult;
    }

    /**
     * @param boolean $TestNetworkPathConnectivityWithCredentialsResult
     * @return TestNetworkPathConnectivityWithCredentialsResponse
     */
    public function setTestNetworkPathConnectivityWithCredentialsResult($TestNetworkPathConnectivityWithCredentialsResult)
    {
        $this->TestNetworkPathConnectivityWithCredentialsResult = $TestNetworkPathConnectivityWithCredentialsResult;
        return $this;
    }

}
