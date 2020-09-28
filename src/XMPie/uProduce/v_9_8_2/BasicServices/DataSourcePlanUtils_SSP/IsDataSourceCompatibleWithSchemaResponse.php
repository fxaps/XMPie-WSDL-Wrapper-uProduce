<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSourcePlanUtils_SSP;

class IsDataSourceCompatibleWithSchemaResponse
{

    /**
     * @var boolean $IsDataSourceCompatibleWithSchemaResult
     */
    protected $IsDataSourceCompatibleWithSchemaResult = null;

    /**
     * @param boolean $IsDataSourceCompatibleWithSchemaResult
     */
    public function __construct($IsDataSourceCompatibleWithSchemaResult = null)
    {
        $this->IsDataSourceCompatibleWithSchemaResult = $IsDataSourceCompatibleWithSchemaResult;
    }

    /**
     * @return boolean
     */
    public function getIsDataSourceCompatibleWithSchemaResult()
    {
        return $this->IsDataSourceCompatibleWithSchemaResult;
    }

    /**
     * @param boolean $IsDataSourceCompatibleWithSchemaResult
     * @return IsDataSourceCompatibleWithSchemaResponse
     */
    public function setIsDataSourceCompatibleWithSchemaResult($IsDataSourceCompatibleWithSchemaResult)
    {
        $this->IsDataSourceCompatibleWithSchemaResult = $IsDataSourceCompatibleWithSchemaResult;
        return $this;
    }

}
