<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class HostTablesResponse
{

    /**
     * @var string $HostTablesResult
     */
    protected $HostTablesResult = null;

    /**
     * @param string $HostTablesResult
     */
    public function __construct($HostTablesResult = null)
    {
        $this->HostTablesResult = $HostTablesResult;
    }

    /**
     * @return string
     */
    public function getHostTablesResult()
    {
        return $this->HostTablesResult;
    }

    /**
     * @param string $HostTablesResult
     * @return HostTablesResponse
     */
    public function setHostTablesResult($HostTablesResult)
    {
        $this->HostTablesResult = $HostTablesResult;
        return $this;
    }

}
