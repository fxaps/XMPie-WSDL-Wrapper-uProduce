<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP;

class GetEmbedEmailBodyResponse
{

    /**
     * @var boolean $GetEmbedEmailBodyResult
     */
    protected $GetEmbedEmailBodyResult = null;

    /**
     * @param boolean $GetEmbedEmailBodyResult
     */
    public function __construct($GetEmbedEmailBodyResult = null)
    {
      $this->GetEmbedEmailBodyResult = $GetEmbedEmailBodyResult;
    }

    /**
     * @return boolean
     */
    public function getGetEmbedEmailBodyResult()
    {
      return $this->GetEmbedEmailBodyResult;
    }

    /**
     * @param boolean $GetEmbedEmailBodyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP\GetEmbedEmailBodyResponse
     */
    public function setGetEmbedEmailBodyResult($GetEmbedEmailBodyResult)
    {
      $this->GetEmbedEmailBodyResult = $GetEmbedEmailBodyResult;
      return $this;
    }

}
