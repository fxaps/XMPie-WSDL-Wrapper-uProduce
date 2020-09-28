<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP;

class GetDestinationTypesResponse
{

    /**
     * @var GetDestinationTypesResult $GetDestinationTypesResult
     */
    protected $GetDestinationTypesResult = null;

    /**
     * @param GetDestinationTypesResult $GetDestinationTypesResult
     */
    public function __construct($GetDestinationTypesResult = null)
    {
        $this->GetDestinationTypesResult = $GetDestinationTypesResult;
    }

    /**
     * @return GetDestinationTypesResult
     */
    public function getGetDestinationTypesResult()
    {
        return $this->GetDestinationTypesResult;
    }

    /**
     * @param GetDestinationTypesResult $GetDestinationTypesResult
     * @return GetDestinationTypesResponse
     */
    public function setGetDestinationTypesResult($GetDestinationTypesResult)
    {
        $this->GetDestinationTypesResult = $GetDestinationTypesResult;
        return $this;
    }

}
