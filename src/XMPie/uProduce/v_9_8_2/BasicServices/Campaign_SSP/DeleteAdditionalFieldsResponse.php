<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class DeleteAdditionalFieldsResponse
{

    /**
     * @var boolean $DeleteAdditionalFieldsResult
     */
    protected $DeleteAdditionalFieldsResult = null;

    /**
     * @param boolean $DeleteAdditionalFieldsResult
     */
    public function __construct($DeleteAdditionalFieldsResult = null)
    {
        $this->DeleteAdditionalFieldsResult = $DeleteAdditionalFieldsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAdditionalFieldsResult()
    {
        return $this->DeleteAdditionalFieldsResult;
    }

    /**
     * @param boolean $DeleteAdditionalFieldsResult
     * @return DeleteAdditionalFieldsResponse
     */
    public function setDeleteAdditionalFieldsResult($DeleteAdditionalFieldsResult)
    {
        $this->DeleteAdditionalFieldsResult = $DeleteAdditionalFieldsResult;
        return $this;
    }

}
