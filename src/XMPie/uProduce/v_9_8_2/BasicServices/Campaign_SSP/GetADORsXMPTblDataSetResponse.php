<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetADORsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetADORsXMPTblDataSetResult
     */
    protected $GetADORsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetADORsXMPTblDataSetResult
     */
    public function __construct($GetADORsXMPTblDataSetResult = null)
    {
        $this->GetADORsXMPTblDataSetResult = $GetADORsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetADORsXMPTblDataSetResult()
    {
        return $this->GetADORsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetADORsXMPTblDataSetResult
     * @return GetADORsXMPTblDataSetResponse
     */
    public function setGetADORsXMPTblDataSetResult($GetADORsXMPTblDataSetResult)
    {
        $this->GetADORsXMPTblDataSetResult = $GetADORsXMPTblDataSetResult;
        return $this;
    }

}
