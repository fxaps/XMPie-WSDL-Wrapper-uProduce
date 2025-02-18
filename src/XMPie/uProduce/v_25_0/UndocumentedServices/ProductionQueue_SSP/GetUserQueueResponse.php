<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\ProductionQueue_SSP;

class GetUserQueueResponse
{

    /**
     * @var string $GetUserQueueResult
     */
    protected $GetUserQueueResult = null;

    /**
     * @param string $GetUserQueueResult
     */
    public function __construct($GetUserQueueResult = null)
    {
      $this->GetUserQueueResult = $GetUserQueueResult;
    }

    /**
     * @return string
     */
    public function getGetUserQueueResult()
    {
      return $this->GetUserQueueResult;
    }

    /**
     * @param string $GetUserQueueResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\ProductionQueue_SSP\GetUserQueueResponse
     */
    public function setGetUserQueueResult($GetUserQueueResult)
    {
      $this->GetUserQueueResult = $GetUserQueueResult;
      return $this;
    }

}
