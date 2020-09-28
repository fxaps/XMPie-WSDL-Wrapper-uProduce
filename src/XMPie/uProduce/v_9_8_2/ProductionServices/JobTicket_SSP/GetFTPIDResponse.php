<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetFTPIDResponse
{

    /**
     * @var string $GetFTPIDResult
     */
    protected $GetFTPIDResult = null;

    /**
     * @param string $GetFTPIDResult
     */
    public function __construct($GetFTPIDResult = null)
    {
        $this->GetFTPIDResult = $GetFTPIDResult;
    }

    /**
     * @return string
     */
    public function getGetFTPIDResult()
    {
        return $this->GetFTPIDResult;
    }

    /**
     * @param string $GetFTPIDResult
     * @return GetFTPIDResponse
     */
    public function setGetFTPIDResult($GetFTPIDResult)
    {
        $this->GetFTPIDResult = $GetFTPIDResult;
        return $this;
    }

}
