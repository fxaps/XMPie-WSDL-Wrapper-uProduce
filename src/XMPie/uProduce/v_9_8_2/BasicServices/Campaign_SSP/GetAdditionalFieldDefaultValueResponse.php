<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetAdditionalFieldDefaultValueResponse
{

    /**
     * @var string $GetAdditionalFieldDefaultValueResult
     */
    protected $GetAdditionalFieldDefaultValueResult = null;

    /**
     * @param string $GetAdditionalFieldDefaultValueResult
     */
    public function __construct($GetAdditionalFieldDefaultValueResult = null)
    {
        $this->GetAdditionalFieldDefaultValueResult = $GetAdditionalFieldDefaultValueResult;
    }

    /**
     * @return string
     */
    public function getGetAdditionalFieldDefaultValueResult()
    {
        return $this->GetAdditionalFieldDefaultValueResult;
    }

    /**
     * @param string $GetAdditionalFieldDefaultValueResult
     * @return GetAdditionalFieldDefaultValueResponse
     */
    public function setGetAdditionalFieldDefaultValueResult($GetAdditionalFieldDefaultValueResult)
    {
        $this->GetAdditionalFieldDefaultValueResult = $GetAdditionalFieldDefaultValueResult;
        return $this;
    }

}
