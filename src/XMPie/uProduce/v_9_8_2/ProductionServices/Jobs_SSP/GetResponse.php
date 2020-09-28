<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Jobs_SSP;

class GetResponse
{

    /**
     * @var ArrayOfString $GetResult
     */
    protected $GetResult = null;

    /**
     * @param ArrayOfString $GetResult
     */
    public function __construct($GetResult = null)
    {
        $this->GetResult = $GetResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetResult()
    {
        return $this->GetResult;
    }

    /**
     * @param ArrayOfString $GetResult
     * @return GetResponse
     */
    public function setGetResult($GetResult)
    {
        $this->GetResult = $GetResult;
        return $this;
    }

}
