<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetEmailBodiesIDsResponse
{

    /**
     * @var ArrayOfString $GetEmailBodiesIDsResult
     */
    protected $GetEmailBodiesIDsResult = null;

    /**
     * @param ArrayOfString $GetEmailBodiesIDsResult
     */
    public function __construct($GetEmailBodiesIDsResult = null)
    {
        $this->GetEmailBodiesIDsResult = $GetEmailBodiesIDsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetEmailBodiesIDsResult()
    {
        return $this->GetEmailBodiesIDsResult;
    }

    /**
     * @param ArrayOfString $GetEmailBodiesIDsResult
     * @return GetEmailBodiesIDsResponse
     */
    public function setGetEmailBodiesIDsResult($GetEmailBodiesIDsResult)
    {
        $this->GetEmailBodiesIDsResult = $GetEmailBodiesIDsResult;
        return $this;
    }

}
