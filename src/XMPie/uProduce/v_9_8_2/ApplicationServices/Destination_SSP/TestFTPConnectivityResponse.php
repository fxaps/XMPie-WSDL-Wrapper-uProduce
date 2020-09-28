<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP;

class TestFTPConnectivityResponse
{

    /**
     * @var boolean $TestFTPConnectivityResult
     */
    protected $TestFTPConnectivityResult = null;

    /**
     * @param boolean $TestFTPConnectivityResult
     */
    public function __construct($TestFTPConnectivityResult = null)
    {
        $this->TestFTPConnectivityResult = $TestFTPConnectivityResult;
    }

    /**
     * @return boolean
     */
    public function getTestFTPConnectivityResult()
    {
        return $this->TestFTPConnectivityResult;
    }

    /**
     * @param boolean $TestFTPConnectivityResult
     * @return TestFTPConnectivityResponse
     */
    public function setTestFTPConnectivityResult($TestFTPConnectivityResult)
    {
        $this->TestFTPConnectivityResult = $TestFTPConnectivityResult;
        return $this;
    }

}
