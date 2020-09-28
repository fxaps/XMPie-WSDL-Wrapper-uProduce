<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\EmailServices_SSP;

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
     * @return SetEmailSubscriptionStatusResponse
     */
    public function setSetEmailSubscriptionStatusResult($SetEmailSubscriptionStatusResult)
    {
        $this->SetEmailSubscriptionStatusResult = $SetEmailSubscriptionStatusResult;
        return $this;
    }

}
