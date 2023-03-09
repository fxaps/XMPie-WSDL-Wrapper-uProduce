<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP;

class GetDataSetResponse
{

    /**
     * @var GetDataSetResult $GetDataSetResult
     */
    protected $GetDataSetResult = null;

    /**
     * @param GetDataSetResult $GetDataSetResult
     */
    public function __construct($GetDataSetResult = null)
    {
      $this->GetDataSetResult = $GetDataSetResult;
    }

    /**
     * @return GetDataSetResult
     */
    public function getGetDataSetResult()
    {
      return $this->GetDataSetResult;
    }

    /**
     * @param GetDataSetResult $GetDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP\GetDataSetResponse
     */
    public function setGetDataSetResult($GetDataSetResult)
    {
      $this->GetDataSetResult = $GetDataSetResult;
      return $this;
    }

}
