<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class DeleteAdditionalFieldValuesResponse
{

    /**
     * @var boolean $DeleteAdditionalFieldValuesResult
     */
    protected $DeleteAdditionalFieldValuesResult = null;

    /**
     * @param boolean $DeleteAdditionalFieldValuesResult
     */
    public function __construct($DeleteAdditionalFieldValuesResult = null)
    {
        $this->DeleteAdditionalFieldValuesResult = $DeleteAdditionalFieldValuesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAdditionalFieldValuesResult()
    {
        return $this->DeleteAdditionalFieldValuesResult;
    }

    /**
     * @param boolean $DeleteAdditionalFieldValuesResult
     * @return DeleteAdditionalFieldValuesResponse
     */
    public function setDeleteAdditionalFieldValuesResult($DeleteAdditionalFieldValuesResult)
    {
        $this->DeleteAdditionalFieldValuesResult = $DeleteAdditionalFieldValuesResult;
        return $this;
    }

}
