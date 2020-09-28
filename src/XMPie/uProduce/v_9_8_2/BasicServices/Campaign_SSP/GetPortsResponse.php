<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetPortsResponse
{

    /**
     * @var ArrayOfString $GetPortsResult
     */
    protected $GetPortsResult = null;

    /**
     * @param ArrayOfString $GetPortsResult
     */
    public function __construct($GetPortsResult = null)
    {
        $this->GetPortsResult = $GetPortsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetPortsResult()
    {
        return $this->GetPortsResult;
    }

    /**
     * @param ArrayOfString $GetPortsResult
     * @return GetPortsResponse
     */
    public function setGetPortsResult($GetPortsResult)
    {
        $this->GetPortsResult = $GetPortsResult;
        return $this;
    }

}
