<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetPlanPartsProvidersXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetPlanPartsProvidersXMPTblDataSetResult
     */
    protected $GetPlanPartsProvidersXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetPlanPartsProvidersXMPTblDataSetResult
     */
    public function __construct($GetPlanPartsProvidersXMPTblDataSetResult = null)
    {
        $this->GetPlanPartsProvidersXMPTblDataSetResult = $GetPlanPartsProvidersXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetPlanPartsProvidersXMPTblDataSetResult()
    {
        return $this->GetPlanPartsProvidersXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetPlanPartsProvidersXMPTblDataSetResult
     * @return GetPlanPartsProvidersXMPTblDataSetResponse
     */
    public function setGetPlanPartsProvidersXMPTblDataSetResult($GetPlanPartsProvidersXMPTblDataSetResult)
    {
        $this->GetPlanPartsProvidersXMPTblDataSetResult = $GetPlanPartsProvidersXMPTblDataSetResult;
        return $this;
    }

}
