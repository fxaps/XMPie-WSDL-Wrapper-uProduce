<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class CreateFullCPKGResponse
{

    /**
     * @var string $CreateFullCPKGResult
     */
    protected $CreateFullCPKGResult = null;

    /**
     * @param string $CreateFullCPKGResult
     */
    public function __construct($CreateFullCPKGResult = null)
    {
        $this->CreateFullCPKGResult = $CreateFullCPKGResult;
    }

    /**
     * @return string
     */
    public function getCreateFullCPKGResult()
    {
        return $this->CreateFullCPKGResult;
    }

    /**
     * @param string $CreateFullCPKGResult
     * @return CreateFullCPKGResponse
     */
    public function setCreateFullCPKGResult($CreateFullCPKGResult)
    {
        $this->CreateFullCPKGResult = $CreateFullCPKGResult;
        return $this;
    }

}
