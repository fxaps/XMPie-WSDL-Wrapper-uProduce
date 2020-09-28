<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetNthRIRecipientIDListFileNameResponse
{

    /**
     * @var string $GetNthRIRecipientIDListFileNameResult
     */
    protected $GetNthRIRecipientIDListFileNameResult = null;

    /**
     * @param string $GetNthRIRecipientIDListFileNameResult
     */
    public function __construct($GetNthRIRecipientIDListFileNameResult = null)
    {
        $this->GetNthRIRecipientIDListFileNameResult = $GetNthRIRecipientIDListFileNameResult;
    }

    /**
     * @return string
     */
    public function getGetNthRIRecipientIDListFileNameResult()
    {
        return $this->GetNthRIRecipientIDListFileNameResult;
    }

    /**
     * @param string $GetNthRIRecipientIDListFileNameResult
     * @return GetNthRIRecipientIDListFileNameResponse
     */
    public function setGetNthRIRecipientIDListFileNameResult($GetNthRIRecipientIDListFileNameResult)
    {
        $this->GetNthRIRecipientIDListFileNameResult = $GetNthRIRecipientIDListFileNameResult;
        return $this;
    }

}
