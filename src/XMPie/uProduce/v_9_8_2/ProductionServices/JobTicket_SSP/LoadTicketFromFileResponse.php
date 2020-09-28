<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class LoadTicketFromFileResponse
{

    /**
     * @var string $LoadTicketFromFileResult
     */
    protected $LoadTicketFromFileResult = null;

    /**
     * @param string $LoadTicketFromFileResult
     */
    public function __construct($LoadTicketFromFileResult = null)
    {
        $this->LoadTicketFromFileResult = $LoadTicketFromFileResult;
    }

    /**
     * @return string
     */
    public function getLoadTicketFromFileResult()
    {
        return $this->LoadTicketFromFileResult;
    }

    /**
     * @param string $LoadTicketFromFileResult
     * @return LoadTicketFromFileResponse
     */
    public function setLoadTicketFromFileResult($LoadTicketFromFileResult)
    {
        $this->LoadTicketFromFileResult = $LoadTicketFromFileResult;
        return $this;
    }

}
