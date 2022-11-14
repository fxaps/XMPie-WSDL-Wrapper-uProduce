<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Campaign_SSP;

class GetDataSourceIDResponse
{

    /**
     * @var string $GetDataSourceIDResult
     */
    protected $GetDataSourceIDResult = null;

    /**
     * @param string $GetDataSourceIDResult
     */
    public function __construct($GetDataSourceIDResult = null)
    {
      $this->GetDataSourceIDResult = $GetDataSourceIDResult;
    }

    /**
     * @return string
     */
    public function getGetDataSourceIDResult()
    {
      return $this->GetDataSourceIDResult;
    }

    /**
     * @param string $GetDataSourceIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Campaign_SSP\GetDataSourceIDResponse
     */
    public function setGetDataSourceIDResult($GetDataSourceIDResult)
    {
      $this->GetDataSourceIDResult = $GetDataSourceIDResult;
      return $this;
    }

}
