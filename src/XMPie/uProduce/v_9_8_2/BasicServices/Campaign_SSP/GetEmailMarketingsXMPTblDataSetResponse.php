<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetEmailMarketingsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetEmailMarketingsXMPTblDataSetResult
     */
    protected $GetEmailMarketingsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetEmailMarketingsXMPTblDataSetResult
     */
    public function __construct($GetEmailMarketingsXMPTblDataSetResult = null)
    {
        $this->GetEmailMarketingsXMPTblDataSetResult = $GetEmailMarketingsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetEmailMarketingsXMPTblDataSetResult()
    {
        return $this->GetEmailMarketingsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetEmailMarketingsXMPTblDataSetResult
     * @return GetEmailMarketingsXMPTblDataSetResponse
     */
    public function setGetEmailMarketingsXMPTblDataSetResult($GetEmailMarketingsXMPTblDataSetResult)
    {
        $this->GetEmailMarketingsXMPTblDataSetResult = $GetEmailMarketingsXMPTblDataSetResult;
        return $this;
    }

}
