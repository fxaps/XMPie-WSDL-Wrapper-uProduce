<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class DeleteTicketFromDBResponse
{

    /**
     * @var boolean $DeleteTicketFromDBResult
     */
    protected $DeleteTicketFromDBResult = null;

    /**
     * @param boolean $DeleteTicketFromDBResult
     */
    public function __construct($DeleteTicketFromDBResult = null)
    {
      $this->DeleteTicketFromDBResult = $DeleteTicketFromDBResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteTicketFromDBResult()
    {
      return $this->DeleteTicketFromDBResult;
    }

    /**
     * @param boolean $DeleteTicketFromDBResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP\DeleteTicketFromDBResponse
     */
    public function setDeleteTicketFromDBResult($DeleteTicketFromDBResult)
    {
      $this->DeleteTicketFromDBResult = $DeleteTicketFromDBResult;
      return $this;
    }

}
