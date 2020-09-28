<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\ProductionQueue_SSP;

class GetUserQueueNameResponse
{

    /**
     * @var string $GetUserQueueNameResult
     */
    protected $GetUserQueueNameResult = null;

    /**
     * @param string $GetUserQueueNameResult
     */
    public function __construct($GetUserQueueNameResult = null)
    {
        $this->GetUserQueueNameResult = $GetUserQueueNameResult;
    }

    /**
     * @return string
     */
    public function getGetUserQueueNameResult()
    {
        return $this->GetUserQueueNameResult;
    }

    /**
     * @param string $GetUserQueueNameResult
     * @return GetUserQueueNameResponse
     */
    public function setGetUserQueueNameResult($GetUserQueueNameResult)
    {
        $this->GetUserQueueNameResult = $GetUserQueueNameResult;
        return $this;
    }

}
