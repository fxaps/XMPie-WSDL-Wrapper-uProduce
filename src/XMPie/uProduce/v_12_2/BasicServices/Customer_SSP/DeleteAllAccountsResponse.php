<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\Customer_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\Customer_SSP\DeleteAllAccountsResponse
     */
    public function setDeleteAllAccountsResult($DeleteAllAccountsResult)
    {
      $this->DeleteAllAccountsResult = $DeleteAllAccountsResult;
      return $this;
    }

}
