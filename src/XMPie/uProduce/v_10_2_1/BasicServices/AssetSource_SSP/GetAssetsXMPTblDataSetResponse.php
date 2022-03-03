<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\AssetSource_SSP;

class GetAssetsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetAssetsXMPTblDataSetResult
     */
    protected $GetAssetsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetAssetsXMPTblDataSetResult
     */
    public function __construct($GetAssetsXMPTblDataSetResult = null)
    {
      $this->GetAssetsXMPTblDataSetResult = $GetAssetsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetAssetsXMPTblDataSetResult()
    {
      return $this->GetAssetsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetAssetsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSetResponse
     */
    public function setGetAssetsXMPTblDataSetResult($GetAssetsXMPTblDataSetResult)
    {
      $this->GetAssetsXMPTblDataSetResult = $GetAssetsXMPTblDataSetResult;
      return $this;
    }

}
