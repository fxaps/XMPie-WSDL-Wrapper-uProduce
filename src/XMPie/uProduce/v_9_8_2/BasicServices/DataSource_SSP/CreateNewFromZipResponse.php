<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class CreateNewFromZipResponse
{

    /**
     * @var string $CreateNewFromZipResult
     */
    protected $CreateNewFromZipResult = null;

    /**
     * @param string $CreateNewFromZipResult
     */
    public function __construct($CreateNewFromZipResult = null)
    {
        $this->CreateNewFromZipResult = $CreateNewFromZipResult;
    }

    /**
     * @return string
     */
    public function getCreateNewFromZipResult()
    {
        return $this->CreateNewFromZipResult;
    }

    /**
     * @param string $CreateNewFromZipResult
     * @return CreateNewFromZipResponse
     */
    public function setCreateNewFromZipResult($CreateNewFromZipResult)
    {
        $this->CreateNewFromZipResult = $CreateNewFromZipResult;
        return $this;
    }

}
