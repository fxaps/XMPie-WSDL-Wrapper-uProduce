<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class LoadLastJobTicketOfDocumentResponse
{

    /**
     * @var string $LoadLastJobTicketOfDocumentResult
     */
    protected $LoadLastJobTicketOfDocumentResult = null;

    /**
     * @param string $LoadLastJobTicketOfDocumentResult
     */
    public function __construct($LoadLastJobTicketOfDocumentResult = null)
    {
        $this->LoadLastJobTicketOfDocumentResult = $LoadLastJobTicketOfDocumentResult;
    }

    /**
     * @return string
     */
    public function getLoadLastJobTicketOfDocumentResult()
    {
        return $this->LoadLastJobTicketOfDocumentResult;
    }

    /**
     * @param string $LoadLastJobTicketOfDocumentResult
     * @return LoadLastJobTicketOfDocumentResponse
     */
    public function setLoadLastJobTicketOfDocumentResult($LoadLastJobTicketOfDocumentResult)
    {
        $this->LoadLastJobTicketOfDocumentResult = $LoadLastJobTicketOfDocumentResult;
        return $this;
    }

}
