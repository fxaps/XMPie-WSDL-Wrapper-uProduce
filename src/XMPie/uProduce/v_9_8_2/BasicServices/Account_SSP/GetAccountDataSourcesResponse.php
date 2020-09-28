<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Account_SSP;

class GetAccountDataSourcesResponse
{

    /**
     * @var ArrayOfString $GetAccountDataSourcesResult
     */
    protected $GetAccountDataSourcesResult = null;

    /**
     * @param ArrayOfString $GetAccountDataSourcesResult
     */
    public function __construct($GetAccountDataSourcesResult = null)
    {
        $this->GetAccountDataSourcesResult = $GetAccountDataSourcesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAccountDataSourcesResult()
    {
        return $this->GetAccountDataSourcesResult;
    }

    /**
     * @param ArrayOfString $GetAccountDataSourcesResult
     * @return GetAccountDataSourcesResponse
     */
    public function setGetAccountDataSourcesResult($GetAccountDataSourcesResult)
    {
        $this->GetAccountDataSourcesResult = $GetAccountDataSourcesResult;
        return $this;
    }

}
