<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class CreateNewFromLocalEmailHostingResponse
{

    /**
     * @var string $CreateNewFromLocalEmailHostingResult
     */
    protected $CreateNewFromLocalEmailHostingResult = null;

    /**
     * @param string $CreateNewFromLocalEmailHostingResult
     */
    public function __construct($CreateNewFromLocalEmailHostingResult = null)
    {
        $this->CreateNewFromLocalEmailHostingResult = $CreateNewFromLocalEmailHostingResult;
    }

    /**
     * @return string
     */
    public function getCreateNewFromLocalEmailHostingResult()
    {
        return $this->CreateNewFromLocalEmailHostingResult;
    }

    /**
     * @param string $CreateNewFromLocalEmailHostingResult
     * @return CreateNewFromLocalEmailHostingResponse
     */
    public function setCreateNewFromLocalEmailHostingResult($CreateNewFromLocalEmailHostingResult)
    {
        $this->CreateNewFromLocalEmailHostingResult = $CreateNewFromLocalEmailHostingResult;
        return $this;
    }

}
