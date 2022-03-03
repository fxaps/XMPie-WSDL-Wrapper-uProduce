<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\ProductionQueue_SSP;

class GetAvailableQueuesDataSetResponse
{

    /**
     * @var GetAvailableQueuesDataSetResult $GetAvailableQueuesDataSetResult
     */
    protected $GetAvailableQueuesDataSetResult = null;

    /**
     * @param GetAvailableQueuesDataSetResult $GetAvailableQueuesDataSetResult
     */
    public function __construct($GetAvailableQueuesDataSetResult = null)
    {
      $this->GetAvailableQueuesDataSetResult = $GetAvailableQueuesDataSetResult;
    }

    /**
     * @return GetAvailableQueuesDataSetResult
     */
    public function getGetAvailableQueuesDataSetResult()
    {
      return $this->GetAvailableQueuesDataSetResult;
    }

    /**
     * @param GetAvailableQueuesDataSetResult $GetAvailableQueuesDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesDataSetResponse
     */
    public function setGetAvailableQueuesDataSetResult($GetAvailableQueuesDataSetResult)
    {
      $this->GetAvailableQueuesDataSetResult = $GetAvailableQueuesDataSetResult;
      return $this;
    }

}
