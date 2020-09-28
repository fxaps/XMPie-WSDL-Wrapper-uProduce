<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class CreateCPKGResponse
{

    /**
     * @var string $CreateCPKGResult
     */
    protected $CreateCPKGResult = null;

    /**
     * @param string $CreateCPKGResult
     */
    public function __construct($CreateCPKGResult = null)
    {
        $this->CreateCPKGResult = $CreateCPKGResult;
    }

    /**
     * @return string
     */
    public function getCreateCPKGResult()
    {
        return $this->CreateCPKGResult;
    }

    /**
     * @param string $CreateCPKGResult
     * @return CreateCPKGResponse
     */
    public function setCreateCPKGResult($CreateCPKGResult)
    {
        $this->CreateCPKGResult = $CreateCPKGResult;
        return $this;
    }

}
