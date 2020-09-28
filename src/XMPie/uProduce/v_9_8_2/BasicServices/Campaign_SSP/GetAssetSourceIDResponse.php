<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetAssetSourceIDResponse
{

    /**
     * @var string $GetAssetSourceIDResult
     */
    protected $GetAssetSourceIDResult = null;

    /**
     * @param string $GetAssetSourceIDResult
     */
    public function __construct($GetAssetSourceIDResult = null)
    {
      $this->GetAssetSourceIDResult = $GetAssetSourceIDResult;
    }

    /**
     * @return string
     */
    public function getGetAssetSourceIDResult()
    {
      return $this->GetAssetSourceIDResult;
    }

    /**
     * @param string $GetAssetSourceIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP\GetAssetSourceIDResponse
     */
    public function setGetAssetSourceIDResult($GetAssetSourceIDResult)
    {
      $this->GetAssetSourceIDResult = $GetAssetSourceIDResult;
      return $this;
    }

}
