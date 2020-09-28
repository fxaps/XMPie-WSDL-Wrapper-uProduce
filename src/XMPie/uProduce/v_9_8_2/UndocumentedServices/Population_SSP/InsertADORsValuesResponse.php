<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP;

class InsertADORsValuesResponse
{

    /**
     * @var string $InsertADORsValuesResult
     */
    protected $InsertADORsValuesResult = null;

    /**
     * @param string $InsertADORsValuesResult
     */
    public function __construct($InsertADORsValuesResult = null)
    {
        $this->InsertADORsValuesResult = $InsertADORsValuesResult;
    }

    /**
     * @return string
     */
    public function getInsertADORsValuesResult()
    {
        return $this->InsertADORsValuesResult;
    }

    /**
     * @param string $InsertADORsValuesResult
     * @return InsertADORsValuesResponse
     */
    public function setInsertADORsValuesResult($InsertADORsValuesResult)
    {
        $this->InsertADORsValuesResult = $InsertADORsValuesResult;
        return $this;
    }

}
