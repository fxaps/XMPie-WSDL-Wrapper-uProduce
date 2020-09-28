<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class CreateNewTicketForPlanResponse
{

    /**
     * @var string $CreateNewTicketForPlanResult
     */
    protected $CreateNewTicketForPlanResult = null;

    /**
     * @param string $CreateNewTicketForPlanResult
     */
    public function __construct($CreateNewTicketForPlanResult = null)
    {
        $this->CreateNewTicketForPlanResult = $CreateNewTicketForPlanResult;
    }

    /**
     * @return string
     */
    public function getCreateNewTicketForPlanResult()
    {
        return $this->CreateNewTicketForPlanResult;
    }

    /**
     * @param string $CreateNewTicketForPlanResult
     * @return CreateNewTicketForPlanResponse
     */
    public function setCreateNewTicketForPlanResult($CreateNewTicketForPlanResult)
    {
        $this->CreateNewTicketForPlanResult = $CreateNewTicketForPlanResult;
        return $this;
    }

}
