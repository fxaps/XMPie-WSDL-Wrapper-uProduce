<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetCustomButtonsResponse
{

    /**
     * @var ArrayOfString $GetCustomButtonsResult
     */
    protected $GetCustomButtonsResult = null;

    /**
     * @param ArrayOfString $GetCustomButtonsResult
     */
    public function __construct($GetCustomButtonsResult = null)
    {
        $this->GetCustomButtonsResult = $GetCustomButtonsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetCustomButtonsResult()
    {
        return $this->GetCustomButtonsResult;
    }

    /**
     * @param ArrayOfString $GetCustomButtonsResult
     * @return GetCustomButtonsResponse
     */
    public function setGetCustomButtonsResult($GetCustomButtonsResult)
    {
        $this->GetCustomButtonsResult = $GetCustomButtonsResult;
        return $this;
    }

}
