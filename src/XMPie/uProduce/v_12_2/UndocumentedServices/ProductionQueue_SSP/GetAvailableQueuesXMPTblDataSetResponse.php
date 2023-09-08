<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\ProductionQueue_SSP;

class GetAvailableQueuesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetAvailableQueuesXMPTblDataSetResult
     */
    protected $GetAvailableQueuesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetAvailableQueuesXMPTblDataSetResult
     */
    public function __construct($GetAvailableQueuesXMPTblDataSetResult = null)
    {
      $this->GetAvailableQueuesXMPTblDataSetResult = $GetAvailableQueuesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetAvailableQueuesXMPTblDataSetResult()
    {
      return $this->GetAvailableQueuesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetAvailableQueuesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesXMPTblDataSetResponse
     */
    public function setGetAvailableQueuesXMPTblDataSetResult($GetAvailableQueuesXMPTblDataSetResult)
    {
      $this->GetAvailableQueuesXMPTblDataSetResult = $GetAvailableQueuesXMPTblDataSetResult;
      return $this;
    }

}
