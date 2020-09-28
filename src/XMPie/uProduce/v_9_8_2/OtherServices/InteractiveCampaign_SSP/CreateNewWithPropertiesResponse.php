<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class CreateNewWithPropertiesResponse
{

    /**
     * @var string $CreateNewWithPropertiesResult
     */
    protected $CreateNewWithPropertiesResult = null;

    /**
     * @param string $CreateNewWithPropertiesResult
     */
    public function __construct($CreateNewWithPropertiesResult = null)
    {
        $this->CreateNewWithPropertiesResult = $CreateNewWithPropertiesResult;
    }

    /**
     * @return string
     */
    public function getCreateNewWithPropertiesResult()
    {
        return $this->CreateNewWithPropertiesResult;
    }

    /**
     * @param string $CreateNewWithPropertiesResult
     * @return CreateNewWithPropertiesResponse
     */
    public function setCreateNewWithPropertiesResult($CreateNewWithPropertiesResult)
    {
        $this->CreateNewWithPropertiesResult = $CreateNewWithPropertiesResult;
        return $this;
    }

}
