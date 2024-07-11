<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP;

class GetTablesMatchToRecipientTableResponse
{

    /**
     * @var ArrayOfXMPTblMatching $GetTablesMatchToRecipientTableResult
     */
    protected $GetTablesMatchToRecipientTableResult = null;

    /**
     * @param ArrayOfXMPTblMatching $GetTablesMatchToRecipientTableResult
     */
    public function __construct($GetTablesMatchToRecipientTableResult = null)
    {
      $this->GetTablesMatchToRecipientTableResult = $GetTablesMatchToRecipientTableResult;
    }

    /**
     * @return ArrayOfXMPTblMatching
     */
    public function getGetTablesMatchToRecipientTableResult()
    {
      return $this->GetTablesMatchToRecipientTableResult;
    }

    /**
     * @param ArrayOfXMPTblMatching $GetTablesMatchToRecipientTableResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\GetTablesMatchToRecipientTableResponse
     */
    public function setGetTablesMatchToRecipientTableResult($GetTablesMatchToRecipientTableResult)
    {
      $this->GetTablesMatchToRecipientTableResult = $GetTablesMatchToRecipientTableResult;
      return $this;
    }

}
