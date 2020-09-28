<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class GetPathResponse
{

    /**
     * @var string $GetPathResult
     */
    protected $GetPathResult = null;

    /**
     * @param string $GetPathResult
     */
    public function __construct($GetPathResult = null)
    {
        $this->GetPathResult = $GetPathResult;
    }

    /**
     * @return string
     */
    public function getGetPathResult()
    {
        return $this->GetPathResult;
    }

    /**
     * @param string $GetPathResult
     * @return GetPathResponse
     */
    public function setGetPathResult($GetPathResult)
    {
        $this->GetPathResult = $GetPathResult;
        return $this;
    }

}
