<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\EmailServices_SSP;

class SetEmailSubscriptionStatusResponse
{

    /**
     * @var boolean $SetEmailSubscriptionStatusResult
     */
    protected $SetEmailSubscriptionStatusResult = null;

    /**
     * @param boolean $SetEmailSubscriptionStatusResult
     */
    public function __construct($SetEmailSubscriptionStatusResult = null)
    {
      $this->SetEmailSubscriptionStatusResult = $SetEmailSubscriptionStatusResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmailSubscriptionStatusResult()
    {
      return $this->SetEmailSubscriptionStatusResult;
    }

    /**
     * @param boolean $SetEmailSubscriptionStatusResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatusResponse
     */
    public function setSetEmailSubscriptionStatusResult($SetEmailSubscriptionStatusResult)
    {
      $this->SetEmailSubscriptionStatusResult = $SetEmailSubscriptionStatusResult;
      return $this;
    }

}
