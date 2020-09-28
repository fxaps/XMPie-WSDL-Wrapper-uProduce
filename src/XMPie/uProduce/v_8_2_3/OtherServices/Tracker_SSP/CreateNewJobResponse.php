<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\Tracker_SSP;

class CreateNewJobResponse
{

    /**
     * @var string $CreateNewJobResult
     */
    protected $CreateNewJobResult = null;

    /**
     * @param string $CreateNewJobResult
     */
    public function __construct($CreateNewJobResult = null)
    {
        $this->CreateNewJobResult = $CreateNewJobResult;
    }

    /**
     * @return string
     */
    public function getCreateNewJobResult()
    {
        return $this->CreateNewJobResult;
    }

    /**
     * @param string $CreateNewJobResult
     * @return CreateNewJobResponse
     */
    public function setCreateNewJobResult($CreateNewJobResult)
    {
        $this->CreateNewJobResult = $CreateNewJobResult;
        return $this;
    }

}
