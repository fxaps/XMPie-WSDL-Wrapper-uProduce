<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP;

class GetAccountEmailSubscriberStatusResponse
{

    /**
     * @var boolean $GetAccountEmailSubscriberStatusResult
     */
    protected $GetAccountEmailSubscriberStatusResult = null;

    /**
     * @param boolean $GetAccountEmailSubscriberStatusResult
     */
    public function __construct($GetAccountEmailSubscriberStatusResult = null)
    {
      $this->GetAccountEmailSubscriberStatusResult = $GetAccountEmailSubscriberStatusResult;
    }

    /**
     * @return boolean
     */
    public function getGetAccountEmailSubscriberStatusResult()
    {
      return $this->GetAccountEmailSubscriberStatusResult;
    }

    /**
     * @param boolean $GetAccountEmailSubscriberStatusResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\GetAccountEmailSubscriberStatusResponse
     */
    public function setGetAccountEmailSubscriberStatusResult($GetAccountEmailSubscriberStatusResult)
    {
      $this->GetAccountEmailSubscriberStatusResult = $GetAccountEmailSubscriberStatusResult;
      return $this;
    }

}
