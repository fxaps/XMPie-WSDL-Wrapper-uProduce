<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class GetConnectionInfoResponse
{

    /**
     * @var Connection $GetConnectionInfoResult
     */
    protected $GetConnectionInfoResult = null;

    /**
     * @param Connection $GetConnectionInfoResult
     */
    public function __construct($GetConnectionInfoResult = null)
    {
        $this->GetConnectionInfoResult = $GetConnectionInfoResult;
    }

    /**
     * @return Connection
     */
    public function getGetConnectionInfoResult()
    {
        return $this->GetConnectionInfoResult;
    }

    /**
     * @param Connection $GetConnectionInfoResult
     * @return GetConnectionInfoResponse
     */
    public function setGetConnectionInfoResult($GetConnectionInfoResult)
    {
        $this->GetConnectionInfoResult = $GetConnectionInfoResult;
        return $this;
    }

}
