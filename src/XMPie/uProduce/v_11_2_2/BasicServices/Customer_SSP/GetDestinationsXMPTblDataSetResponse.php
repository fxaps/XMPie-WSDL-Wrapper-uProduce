<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Customer_SSP;

class GetDestinationsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDestinationsXMPTblDataSetResult
     */
    protected $GetDestinationsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDestinationsXMPTblDataSetResult
     */
    public function __construct($GetDestinationsXMPTblDataSetResult = null)
    {
      $this->GetDestinationsXMPTblDataSetResult = $GetDestinationsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDestinationsXMPTblDataSetResult()
    {
      return $this->GetDestinationsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDestinationsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Customer_SSP\GetDestinationsXMPTblDataSetResponse
     */
    public function setGetDestinationsXMPTblDataSetResult($GetDestinationsXMPTblDataSetResult)
    {
      $this->GetDestinationsXMPTblDataSetResult = $GetDestinationsXMPTblDataSetResult;
      return $this;
    }

}
