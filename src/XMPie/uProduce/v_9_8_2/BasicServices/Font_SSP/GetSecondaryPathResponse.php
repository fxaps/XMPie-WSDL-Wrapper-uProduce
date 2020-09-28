<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Font_SSP;

class GetSecondaryPathResponse
{

    /**
     * @var string $GetSecondaryPathResult
     */
    protected $GetSecondaryPathResult = null;

    /**
     * @param string $GetSecondaryPathResult
     */
    public function __construct($GetSecondaryPathResult = null)
    {
        $this->GetSecondaryPathResult = $GetSecondaryPathResult;
    }

    /**
     * @return string
     */
    public function getGetSecondaryPathResult()
    {
        return $this->GetSecondaryPathResult;
    }

    /**
     * @param string $GetSecondaryPathResult
     * @return GetSecondaryPathResponse
     */
    public function setGetSecondaryPathResult($GetSecondaryPathResult)
    {
        $this->GetSecondaryPathResult = $GetSecondaryPathResult;
        return $this;
    }

}
