<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP;

class GetEmailSubscriptionStatusResponse
{

    /**
     * @var int $GetEmailSubscriptionStatusResult
     */
    protected $GetEmailSubscriptionStatusResult = null;

    /**
     * @param int $GetEmailSubscriptionStatusResult
     */
    public function __construct($GetEmailSubscriptionStatusResult = null)
    {
      $this->GetEmailSubscriptionStatusResult = $GetEmailSubscriptionStatusResult;
    }

    /**
     * @return int
     */
    public function getGetEmailSubscriptionStatusResult()
    {
      return $this->GetEmailSubscriptionStatusResult;
    }

    /**
     * @param int $GetEmailSubscriptionStatusResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatusResponse
     */
    public function setGetEmailSubscriptionStatusResult($GetEmailSubscriptionStatusResult)
    {
      $this->GetEmailSubscriptionStatusResult = $GetEmailSubscriptionStatusResult;
      return $this;
    }

}
