<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class CreateNewFromDPKGResponse
{

    /**
     * @var string $CreateNewFromDPKGResult
     */
    protected $CreateNewFromDPKGResult = null;

    /**
     * @param string $CreateNewFromDPKGResult
     */
    public function __construct($CreateNewFromDPKGResult = null)
    {
        $this->CreateNewFromDPKGResult = $CreateNewFromDPKGResult;
    }

    /**
     * @return string
     */
    public function getCreateNewFromDPKGResult()
    {
        return $this->CreateNewFromDPKGResult;
    }

    /**
     * @param string $CreateNewFromDPKGResult
     * @return CreateNewFromDPKGResponse
     */
    public function setCreateNewFromDPKGResult($CreateNewFromDPKGResult)
    {
        $this->CreateNewFromDPKGResult = $CreateNewFromDPKGResult;
        return $this;
    }

}
