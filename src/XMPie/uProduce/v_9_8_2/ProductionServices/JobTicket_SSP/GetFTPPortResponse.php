<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetFTPPortResponse
{

    /**
     * @var int $GetFTPPortResult
     */
    protected $GetFTPPortResult = null;

    /**
     * @param int $GetFTPPortResult
     */
    public function __construct($GetFTPPortResult = null)
    {
        $this->GetFTPPortResult = $GetFTPPortResult;
    }

    /**
     * @return int
     */
    public function getGetFTPPortResult()
    {
        return $this->GetFTPPortResult;
    }

    /**
     * @param int $GetFTPPortResult
     * @return GetFTPPortResponse
     */
    public function setGetFTPPortResult($GetFTPPortResult)
    {
        $this->GetFTPPortResult = $GetFTPPortResult;
        return $this;
    }

}
