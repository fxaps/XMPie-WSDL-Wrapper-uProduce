<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class GetXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetXMPTblDataSetResult
     */
    protected $GetXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetXMPTblDataSetResult
     */
    public function __construct($GetXMPTblDataSetResult = null)
    {
        $this->GetXMPTblDataSetResult = $GetXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetXMPTblDataSetResult()
    {
        return $this->GetXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetXMPTblDataSetResult
     * @return GetXMPTblDataSetResponse
     */
    public function setGetXMPTblDataSetResult($GetXMPTblDataSetResult)
    {
        $this->GetXMPTblDataSetResult = $GetXMPTblDataSetResult;
        return $this;
    }

}
