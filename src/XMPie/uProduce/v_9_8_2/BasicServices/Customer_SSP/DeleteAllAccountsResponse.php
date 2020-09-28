<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class DeleteAllAccountsResponse
{

    /**
     * @var boolean $DeleteAllAccountsResult
     */
    protected $DeleteAllAccountsResult = null;

    /**
     * @param boolean $DeleteAllAccountsResult
     */
    public function __construct($DeleteAllAccountsResult = null)
    {
        $this->DeleteAllAccountsResult = $DeleteAllAccountsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllAccountsResult()
    {
        return $this->DeleteAllAccountsResult;
    }

    /**
     * @param boolean $DeleteAllAccountsResult
     * @return DeleteAllAccountsResponse
     */
    public function setDeleteAllAccountsResult($DeleteAllAccountsResult)
    {
        $this->DeleteAllAccountsResult = $DeleteAllAccountsResult;
        return $this;
    }

}
