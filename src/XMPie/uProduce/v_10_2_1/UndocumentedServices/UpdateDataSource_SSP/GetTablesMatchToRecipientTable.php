<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\UpdateDataSource_SSP;

class GetTablesMatchToRecipientTable
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var XMPTblDataSet $inUploadedTablesDataSet
     */
    protected $inUploadedTablesDataSet = null;

    /**
     * @var string $inRecipientTableId
     */
    protected $inRecipientTableId = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param XMPTblDataSet $inUploadedTablesDataSet
     * @param string $inRecipientTableId
     */
    public function __construct($inUsername = null, $inPassword = null, $inUploadedTablesDataSet = null, $inRecipientTableId = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inUploadedTablesDataSet = $inUploadedTablesDataSet;
      $this->inRecipientTableId = $inRecipientTableId;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\UpdateDataSource_SSP\GetTablesMatchToRecipientTable
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\UpdateDataSource_SSP\GetTablesMatchToRecipientTable
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getInUploadedTablesDataSet()
    {
      return $this->inUploadedTablesDataSet;
    }

    /**
     * @param XMPTblDataSet $inUploadedTablesDataSet
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\UpdateDataSource_SSP\GetTablesMatchToRecipientTable
     */
    public function setInUploadedTablesDataSet($inUploadedTablesDataSet)
    {
      $this->inUploadedTablesDataSet = $inUploadedTablesDataSet;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientTableId()
    {
      return $this->inRecipientTableId;
    }

    /**
     * @param string $inRecipientTableId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\UpdateDataSource_SSP\GetTablesMatchToRecipientTable
     */
    public function setInRecipientTableId($inRecipientTableId)
    {
      $this->inRecipientTableId = $inRecipientTableId;
      return $this;
    }

}
