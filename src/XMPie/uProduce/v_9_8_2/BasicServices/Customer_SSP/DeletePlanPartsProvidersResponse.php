<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class DeletePlanPartsProvidersResponse
{

    /**
     * @var boolean $DeletePlanPartsProvidersResult
     */
    protected $DeletePlanPartsProvidersResult = null;

    /**
     * @param boolean $DeletePlanPartsProvidersResult
     */
    public function __construct($DeletePlanPartsProvidersResult = null)
    {
        $this->DeletePlanPartsProvidersResult = $DeletePlanPartsProvidersResult;
    }

    /**
     * @return boolean
     */
    public function getDeletePlanPartsProvidersResult()
    {
        return $this->DeletePlanPartsProvidersResult;
    }

    /**
     * @param boolean $DeletePlanPartsProvidersResult
     * @return DeletePlanPartsProvidersResponse
     */
    public function setDeletePlanPartsProvidersResult($DeletePlanPartsProvidersResult)
    {
        $this->DeletePlanPartsProvidersResult = $DeletePlanPartsProvidersResult;
        return $this;
    }

}
