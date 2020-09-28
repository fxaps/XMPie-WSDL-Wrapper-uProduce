<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetAdditionalFieldsResponse
{

    /**
     * @var ArrayOfString $GetAdditionalFieldsResult
     */
    protected $GetAdditionalFieldsResult = null;

    /**
     * @param ArrayOfString $GetAdditionalFieldsResult
     */
    public function __construct($GetAdditionalFieldsResult = null)
    {
        $this->GetAdditionalFieldsResult = $GetAdditionalFieldsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAdditionalFieldsResult()
    {
        return $this->GetAdditionalFieldsResult;
    }

    /**
     * @param ArrayOfString $GetAdditionalFieldsResult
     * @return GetAdditionalFieldsResponse
     */
    public function setGetAdditionalFieldsResult($GetAdditionalFieldsResult)
    {
        $this->GetAdditionalFieldsResult = $GetAdditionalFieldsResult;
        return $this;
    }

}
