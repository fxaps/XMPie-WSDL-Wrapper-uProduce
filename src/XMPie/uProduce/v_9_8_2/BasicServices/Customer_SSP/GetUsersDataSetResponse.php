<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetUsersDataSetResponse
{

    /**
     * @var GetUsersDataSetResult $GetUsersDataSetResult
     */
    protected $GetUsersDataSetResult = null;

    /**
     * @param GetUsersDataSetResult $GetUsersDataSetResult
     */
    public function __construct($GetUsersDataSetResult = null)
    {
        $this->GetUsersDataSetResult = $GetUsersDataSetResult;
    }

    /**
     * @return GetUsersDataSetResult
     */
    public function getGetUsersDataSetResult()
    {
        return $this->GetUsersDataSetResult;
    }

    /**
     * @param GetUsersDataSetResult $GetUsersDataSetResult
     * @return GetUsersDataSetResponse
     */
    public function setGetUsersDataSetResult($GetUsersDataSetResult)
    {
        $this->GetUsersDataSetResult = $GetUsersDataSetResult;
        return $this;
    }

}
