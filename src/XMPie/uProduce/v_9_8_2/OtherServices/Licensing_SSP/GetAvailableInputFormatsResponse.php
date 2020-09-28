<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Licensing_SSP;

class GetAvailableInputFormatsResponse
{

    /**
     * @var ArrayOfString $GetAvailableInputFormatsResult
     */
    protected $GetAvailableInputFormatsResult = null;

    /**
     * @param ArrayOfString $GetAvailableInputFormatsResult
     */
    public function __construct($GetAvailableInputFormatsResult = null)
    {
        $this->GetAvailableInputFormatsResult = $GetAvailableInputFormatsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAvailableInputFormatsResult()
    {
        return $this->GetAvailableInputFormatsResult;
    }

    /**
     * @param ArrayOfString $GetAvailableInputFormatsResult
     * @return GetAvailableInputFormatsResponse
     */
    public function setGetAvailableInputFormatsResult($GetAvailableInputFormatsResult)
    {
        $this->GetAvailableInputFormatsResult = $GetAvailableInputFormatsResult;
        return $this;
    }

}
