<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP;

class SetUserQueueResponse
{

    /**
     * @var boolean $SetUserQueueResult
     */
    protected $SetUserQueueResult = null;

    /**
     * @param boolean $SetUserQueueResult
     */
    public function __construct($SetUserQueueResult = null)
    {
      $this->SetUserQueueResult = $SetUserQueueResult;
    }

    /**
     * @return boolean
     */
    public function getSetUserQueueResult()
    {
      return $this->SetUserQueueResult;
    }

    /**
     * @param boolean $SetUserQueueResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\SetUserQueueResponse
     */
    public function setSetUserQueueResult($SetUserQueueResult)
    {
      $this->SetUserQueueResult = $SetUserQueueResult;
      return $this;
    }

}
