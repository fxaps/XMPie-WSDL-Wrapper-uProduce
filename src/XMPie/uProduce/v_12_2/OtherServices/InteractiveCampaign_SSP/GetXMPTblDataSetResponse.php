<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\InteractiveCampaign_SSP;

class GetXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetXMPTblDataSetResult
     */
    protected $GetXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetXMPTblDataSetResult
     */
    public function __construct($GetXMPTblDataSetResult = null)
    {
      $this->GetXMPTblDataSetResult = $GetXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetXMPTblDataSetResult()
    {
      return $this->GetXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\InteractiveCampaign_SSP\GetXMPTblDataSetResponse
     */
    public function setGetXMPTblDataSetResult($GetXMPTblDataSetResult)
    {
      $this->GetXMPTblDataSetResult = $GetXMPTblDataSetResult;
      return $this;
    }

}
