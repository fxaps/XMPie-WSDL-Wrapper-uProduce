<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP;

class GetJobTypeXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetJobTypeXMPTblDataSetResult
     */
    protected $GetJobTypeXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetJobTypeXMPTblDataSetResult
     */
    public function __construct($GetJobTypeXMPTblDataSetResult = null)
    {
      $this->GetJobTypeXMPTblDataSetResult = $GetJobTypeXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetJobTypeXMPTblDataSetResult()
    {
      return $this->GetJobTypeXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetJobTypeXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypeXMPTblDataSetResponse
     */
    public function setGetJobTypeXMPTblDataSetResult($GetJobTypeXMPTblDataSetResult)
    {
      $this->GetJobTypeXMPTblDataSetResult = $GetJobTypeXMPTblDataSetResult;
      return $this;
    }

}
