<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\XMPieInternalAPI_SSP;

class GetIDByGUIDResponse
{

    /**
     * @var string $GetIDByGUIDResult
     */
    protected $GetIDByGUIDResult = null;

    /**
     * @param string $GetIDByGUIDResult
     */
    public function __construct($GetIDByGUIDResult = null)
    {
        $this->GetIDByGUIDResult = $GetIDByGUIDResult;
    }

    /**
     * @return string
     */
    public function getGetIDByGUIDResult()
    {
        return $this->GetIDByGUIDResult;
    }

    /**
     * @param string $GetIDByGUIDResult
     * @return GetIDByGUIDResponse
     */
    public function setGetIDByGUIDResult($GetIDByGUIDResult)
    {
        $this->GetIDByGUIDResult = $GetIDByGUIDResult;
        return $this;
    }

}
