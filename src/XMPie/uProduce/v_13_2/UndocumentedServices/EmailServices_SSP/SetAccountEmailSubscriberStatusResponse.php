<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP;

class SetAccountEmailSubscriberStatusResponse
{

    /**
     * @var boolean $SetAccountEmailSubscriberStatusResult
     */
    protected $SetAccountEmailSubscriberStatusResult = null;

    /**
     * @param boolean $SetAccountEmailSubscriberStatusResult
     */
    public function __construct($SetAccountEmailSubscriberStatusResult = null)
    {
      $this->SetAccountEmailSubscriberStatusResult = $SetAccountEmailSubscriberStatusResult;
    }

    /**
     * @return boolean
     */
    public function getSetAccountEmailSubscriberStatusResult()
    {
      return $this->SetAccountEmailSubscriberStatusResult;
    }

    /**
     * @param boolean $SetAccountEmailSubscriberStatusResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatusResponse
     */
    public function setSetAccountEmailSubscriberStatusResult($SetAccountEmailSubscriberStatusResult)
    {
      $this->SetAccountEmailSubscriberStatusResult = $SetAccountEmailSubscriberStatusResult;
      return $this;
    }

}
