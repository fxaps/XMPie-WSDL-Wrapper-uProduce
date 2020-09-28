<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class GetPropertyResponse
{

    /**
     * @var Property $GetPropertyResult
     */
    protected $GetPropertyResult = null;

    /**
     * @param Property $GetPropertyResult
     */
    public function __construct($GetPropertyResult = null)
    {
        $this->GetPropertyResult = $GetPropertyResult;
    }

    /**
     * @return Property
     */
    public function getGetPropertyResult()
    {
        return $this->GetPropertyResult;
    }

    /**
     * @param Property $GetPropertyResult
     * @return GetPropertyResponse
     */
    public function setGetPropertyResult($GetPropertyResult)
    {
        $this->GetPropertyResult = $GetPropertyResult;
        return $this;
    }

}
