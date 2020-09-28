<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Licensing_SSP;

class GetMaximumNumberOfAvailableInstancesResponse
{

    /**
     * @var int $GetMaximumNumberOfAvailableInstancesResult
     */
    protected $GetMaximumNumberOfAvailableInstancesResult = null;

    /**
     * @param int $GetMaximumNumberOfAvailableInstancesResult
     */
    public function __construct($GetMaximumNumberOfAvailableInstancesResult = null)
    {
        $this->GetMaximumNumberOfAvailableInstancesResult = $GetMaximumNumberOfAvailableInstancesResult;
    }

    /**
     * @return int
     */
    public function getGetMaximumNumberOfAvailableInstancesResult()
    {
        return $this->GetMaximumNumberOfAvailableInstancesResult;
    }

    /**
     * @param int $GetMaximumNumberOfAvailableInstancesResult
     * @return GetMaximumNumberOfAvailableInstancesResponse
     */
    public function setGetMaximumNumberOfAvailableInstancesResult($GetMaximumNumberOfAvailableInstancesResult)
    {
        $this->GetMaximumNumberOfAvailableInstancesResult = $GetMaximumNumberOfAvailableInstancesResult;
        return $this;
    }

}
