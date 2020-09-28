<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class DeleteCustomButtonsResponse
{

    /**
     * @var boolean $DeleteCustomButtonsResult
     */
    protected $DeleteCustomButtonsResult = null;

    /**
     * @param boolean $DeleteCustomButtonsResult
     */
    public function __construct($DeleteCustomButtonsResult = null)
    {
        $this->DeleteCustomButtonsResult = $DeleteCustomButtonsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteCustomButtonsResult()
    {
        return $this->DeleteCustomButtonsResult;
    }

    /**
     * @param boolean $DeleteCustomButtonsResult
     * @return DeleteCustomButtonsResponse
     */
    public function setDeleteCustomButtonsResult($DeleteCustomButtonsResult)
    {
        $this->DeleteCustomButtonsResult = $DeleteCustomButtonsResult;
        return $this;
    }

}
