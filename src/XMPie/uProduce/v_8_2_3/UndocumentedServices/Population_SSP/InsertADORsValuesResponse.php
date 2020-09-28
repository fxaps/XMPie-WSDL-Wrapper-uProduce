<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\InsertADORsValuesResponse
     */
    public function setInsertADORsValuesResult($InsertADORsValuesResult)
    {
      $this->InsertADORsValuesResult = $InsertADORsValuesResult;
      return $this;
    }

}
