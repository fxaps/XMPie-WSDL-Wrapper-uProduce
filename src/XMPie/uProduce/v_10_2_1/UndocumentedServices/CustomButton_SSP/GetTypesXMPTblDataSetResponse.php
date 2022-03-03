<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\CustomButton_SSP;

class GetTypesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetTypesXMPTblDataSetResult
     */
    protected $GetTypesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetTypesXMPTblDataSetResult
     */
    public function __construct($GetTypesXMPTblDataSetResult = null)
    {
      $this->GetTypesXMPTblDataSetResult = $GetTypesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetTypesXMPTblDataSetResult()
    {
      return $this->GetTypesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetTypesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\CustomButton_SSP\GetTypesXMPTblDataSetResponse
     */
    public function setGetTypesXMPTblDataSetResult($GetTypesXMPTblDataSetResult)
    {
      $this->GetTypesXMPTblDataSetResult = $GetTypesXMPTblDataSetResult;
      return $this;
    }

}
