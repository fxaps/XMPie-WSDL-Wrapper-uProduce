<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetMetaDataResponse
{

    /**
     * @var ArrayOfProperty $GetMetaDataResult
     */
    protected $GetMetaDataResult = null;

    /**
     * @param ArrayOfProperty $GetMetaDataResult
     */
    public function __construct($GetMetaDataResult = null)
    {
        $this->GetMetaDataResult = $GetMetaDataResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetMetaDataResult()
    {
        return $this->GetMetaDataResult;
    }

    /**
     * @param ArrayOfProperty $GetMetaDataResult
     * @return GetMetaDataResponse
     */
    public function setGetMetaDataResult($GetMetaDataResult)
    {
        $this->GetMetaDataResult = $GetMetaDataResult;
        return $this;
    }

}
