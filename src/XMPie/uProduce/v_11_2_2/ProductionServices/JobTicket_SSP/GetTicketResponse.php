<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP;

class GetTicketResponse
{

    /**
     * @var string $GetTicketResult
     */
    protected $GetTicketResult = null;

    /**
     * @param string $GetTicketResult
     */
    public function __construct($GetTicketResult = null)
    {
      $this->GetTicketResult = $GetTicketResult;
    }

    /**
     * @return string
     */
    public function getGetTicketResult()
    {
      return $this->GetTicketResult;
    }

    /**
     * @param string $GetTicketResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP\GetTicketResponse
     */
    public function setGetTicketResult($GetTicketResult)
    {
      $this->GetTicketResult = $GetTicketResult;
      return $this;
    }

}
