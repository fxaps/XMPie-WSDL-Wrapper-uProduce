<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetAccountsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetAccountsXMPTblDataSetResult
     */
    protected $GetAccountsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetAccountsXMPTblDataSetResult
     */
    public function __construct($GetAccountsXMPTblDataSetResult = null)
    {
        $this->GetAccountsXMPTblDataSetResult = $GetAccountsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetAccountsXMPTblDataSetResult()
    {
        return $this->GetAccountsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetAccountsXMPTblDataSetResult
     * @return GetAccountsXMPTblDataSetResponse
     */
    public function setGetAccountsXMPTblDataSetResult($GetAccountsXMPTblDataSetResult)
    {
        $this->GetAccountsXMPTblDataSetResult = $GetAccountsXMPTblDataSetResult;
        return $this;
    }

}
