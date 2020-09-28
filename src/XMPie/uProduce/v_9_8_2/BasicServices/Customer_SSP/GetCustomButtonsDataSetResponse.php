<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetCustomButtonsDataSetResponse
{

    /**
     * @var GetCustomButtonsDataSetResult $GetCustomButtonsDataSetResult
     */
    protected $GetCustomButtonsDataSetResult = null;

    /**
     * @param GetCustomButtonsDataSetResult $GetCustomButtonsDataSetResult
     */
    public function __construct($GetCustomButtonsDataSetResult = null)
    {
        $this->GetCustomButtonsDataSetResult = $GetCustomButtonsDataSetResult;
    }

    /**
     * @return GetCustomButtonsDataSetResult
     */
    public function getGetCustomButtonsDataSetResult()
    {
        return $this->GetCustomButtonsDataSetResult;
    }

    /**
     * @param GetCustomButtonsDataSetResult $GetCustomButtonsDataSetResult
     * @return GetCustomButtonsDataSetResponse
     */
    public function setGetCustomButtonsDataSetResult($GetCustomButtonsDataSetResult)
    {
        $this->GetCustomButtonsDataSetResult = $GetCustomButtonsDataSetResult;
        return $this;
    }

}
