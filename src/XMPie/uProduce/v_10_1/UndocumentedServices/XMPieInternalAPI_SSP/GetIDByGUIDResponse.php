<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\XMPieInternalAPI_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse
     */
    public function setGetIDByGUIDResult($GetIDByGUIDResult)
    {
      $this->GetIDByGUIDResult = $GetIDByGUIDResult;
      return $this;
    }

}
