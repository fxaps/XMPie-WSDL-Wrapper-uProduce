<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSourcePlanUtils_SSP;

class GetDataSourceTypesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDataSourceTypesXMPTblDataSetResult
     */
    protected $GetDataSourceTypesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDataSourceTypesXMPTblDataSetResult
     */
    public function __construct($GetDataSourceTypesXMPTblDataSetResult = null)
    {
        $this->GetDataSourceTypesXMPTblDataSetResult = $GetDataSourceTypesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDataSourceTypesXMPTblDataSetResult()
    {
        return $this->GetDataSourceTypesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDataSourceTypesXMPTblDataSetResult
     * @return GetDataSourceTypesXMPTblDataSetResponse
     */
    public function setGetDataSourceTypesXMPTblDataSetResult($GetDataSourceTypesXMPTblDataSetResult)
    {
        $this->GetDataSourceTypesXMPTblDataSetResult = $GetDataSourceTypesXMPTblDataSetResult;
        return $this;
    }

}
