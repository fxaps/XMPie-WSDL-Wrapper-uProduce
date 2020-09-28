<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

class SetProxyInfoResponse
{

    /**
     * @var boolean $SetProxyInfoResult
     */
    protected $SetProxyInfoResult = null;

    /**
     * @param boolean $SetProxyInfoResult
     */
    public function __construct($SetProxyInfoResult = null)
    {
        $this->SetProxyInfoResult = $SetProxyInfoResult;
    }

    /**
     * @return boolean
     */
    public function getSetProxyInfoResult()
    {
        return $this->SetProxyInfoResult;
    }

    /**
     * @param boolean $SetProxyInfoResult
     * @return SetProxyInfoResponse
     */
    public function setSetProxyInfoResult($SetProxyInfoResult)
    {
        $this->SetProxyInfoResult = $SetProxyInfoResult;
        return $this;
    }

}
