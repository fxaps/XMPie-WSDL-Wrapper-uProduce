<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetPortsDataSetResponse
{

    /**
     * @var GetPortsDataSetResult $GetPortsDataSetResult
     */
    protected $GetPortsDataSetResult = null;

    /**
     * @param GetPortsDataSetResult $GetPortsDataSetResult
     */
    public function __construct($GetPortsDataSetResult = null)
    {
        $this->GetPortsDataSetResult = $GetPortsDataSetResult;
    }

    /**
     * @return GetPortsDataSetResult
     */
    public function getGetPortsDataSetResult()
    {
        return $this->GetPortsDataSetResult;
    }

    /**
     * @param GetPortsDataSetResult $GetPortsDataSetResult
     * @return GetPortsDataSetResponse
     */
    public function setGetPortsDataSetResult($GetPortsDataSetResult)
    {
        $this->GetPortsDataSetResult = $GetPortsDataSetResult;
        return $this;
    }

}
