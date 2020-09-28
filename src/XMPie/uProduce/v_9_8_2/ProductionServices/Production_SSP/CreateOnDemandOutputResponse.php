<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Production_SSP;

class CreateOnDemandOutputResponse
{

    /**
     * @var string $CreateOnDemandOutputResult
     */
    protected $CreateOnDemandOutputResult = null;

    /**
     * @param string $CreateOnDemandOutputResult
     */
    public function __construct($CreateOnDemandOutputResult = null)
    {
        $this->CreateOnDemandOutputResult = $CreateOnDemandOutputResult;
    }

    /**
     * @return string
     */
    public function getCreateOnDemandOutputResult()
    {
        return $this->CreateOnDemandOutputResult;
    }

    /**
     * @param string $CreateOnDemandOutputResult
     * @return CreateOnDemandOutputResponse
     */
    public function setCreateOnDemandOutputResult($CreateOnDemandOutputResult)
    {
        $this->CreateOnDemandOutputResult = $CreateOnDemandOutputResult;
        return $this;
    }

}
