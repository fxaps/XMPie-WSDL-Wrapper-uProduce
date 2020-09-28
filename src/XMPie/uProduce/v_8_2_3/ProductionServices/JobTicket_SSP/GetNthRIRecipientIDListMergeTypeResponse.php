<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP;

class GetNthRIRecipientIDListMergeTypeResponse
{

    /**
     * @var ERecipientIDListMergeType $GetNthRIRecipientIDListMergeTypeResult
     */
    protected $GetNthRIRecipientIDListMergeTypeResult = null;

    /**
     * @param ERecipientIDListMergeType $GetNthRIRecipientIDListMergeTypeResult
     */
    public function __construct($GetNthRIRecipientIDListMergeTypeResult = null)
    {
      $this->GetNthRIRecipientIDListMergeTypeResult = $GetNthRIRecipientIDListMergeTypeResult;
    }

    /**
     * @return ERecipientIDListMergeType
     */
    public function getGetNthRIRecipientIDListMergeTypeResult()
    {
      return $this->GetNthRIRecipientIDListMergeTypeResult;
    }

    /**
     * @param ERecipientIDListMergeType $GetNthRIRecipientIDListMergeTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\GetNthRIRecipientIDListMergeTypeResponse
     */
    public function setGetNthRIRecipientIDListMergeTypeResult($GetNthRIRecipientIDListMergeTypeResult)
    {
      $this->GetNthRIRecipientIDListMergeTypeResult = $GetNthRIRecipientIDListMergeTypeResult;
      return $this;
    }

}
