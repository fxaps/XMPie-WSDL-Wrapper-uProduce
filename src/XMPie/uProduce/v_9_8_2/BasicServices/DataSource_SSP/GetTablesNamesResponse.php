<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class GetTablesNamesResponse
{

    /**
     * @var ArrayOfString $GetTablesNamesResult
     */
    protected $GetTablesNamesResult = null;

    /**
     * @param ArrayOfString $GetTablesNamesResult
     */
    public function __construct($GetTablesNamesResult = null)
    {
        $this->GetTablesNamesResult = $GetTablesNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetTablesNamesResult()
    {
        return $this->GetTablesNamesResult;
    }

    /**
     * @param ArrayOfString $GetTablesNamesResult
     * @return GetTablesNamesResponse
     */
    public function setGetTablesNamesResult($GetTablesNamesResult)
    {
        $this->GetTablesNamesResult = $GetTablesNamesResult;
        return $this;
    }

}
