<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetPortsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetPortsXMPTblDataSetResult
     */
    protected $GetPortsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetPortsXMPTblDataSetResult
     */
    public function __construct($GetPortsXMPTblDataSetResult = null)
    {
        $this->GetPortsXMPTblDataSetResult = $GetPortsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetPortsXMPTblDataSetResult()
    {
        return $this->GetPortsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetPortsXMPTblDataSetResult
     * @return GetPortsXMPTblDataSetResponse
     */
    public function setGetPortsXMPTblDataSetResult($GetPortsXMPTblDataSetResult)
    {
        $this->GetPortsXMPTblDataSetResult = $GetPortsXMPTblDataSetResult;
        return $this;
    }

}
