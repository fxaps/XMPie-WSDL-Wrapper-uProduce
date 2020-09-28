<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetTicketDefaultsForDocumentResponse
{

    /**
     * @var boolean $SetTicketDefaultsForDocumentResult
     */
    protected $SetTicketDefaultsForDocumentResult = null;

    /**
     * @param boolean $SetTicketDefaultsForDocumentResult
     */
    public function __construct($SetTicketDefaultsForDocumentResult = null)
    {
        $this->SetTicketDefaultsForDocumentResult = $SetTicketDefaultsForDocumentResult;
    }

    /**
     * @return boolean
     */
    public function getSetTicketDefaultsForDocumentResult()
    {
        return $this->SetTicketDefaultsForDocumentResult;
    }

    /**
     * @param boolean $SetTicketDefaultsForDocumentResult
     * @return SetTicketDefaultsForDocumentResponse
     */
    public function setSetTicketDefaultsForDocumentResult($SetTicketDefaultsForDocumentResult)
    {
        $this->SetTicketDefaultsForDocumentResult = $SetTicketDefaultsForDocumentResult;
        return $this;
    }

}
