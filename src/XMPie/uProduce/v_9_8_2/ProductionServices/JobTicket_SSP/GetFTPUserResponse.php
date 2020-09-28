<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetFTPUserResponse
{

    /**
     * @var string $GetFTPUserResult
     */
    protected $GetFTPUserResult = null;

    /**
     * @param string $GetFTPUserResult
     */
    public function __construct($GetFTPUserResult = null)
    {
        $this->GetFTPUserResult = $GetFTPUserResult;
    }

    /**
     * @return string
     */
    public function getGetFTPUserResult()
    {
        return $this->GetFTPUserResult;
    }

    /**
     * @param string $GetFTPUserResult
     * @return GetFTPUserResponse
     */
    public function setGetFTPUserResult($GetFTPUserResult)
    {
        $this->GetFTPUserResult = $GetFTPUserResult;
        return $this;
    }

}
