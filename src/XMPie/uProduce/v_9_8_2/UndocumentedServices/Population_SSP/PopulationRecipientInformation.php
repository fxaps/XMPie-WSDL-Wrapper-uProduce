<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP;

class PopulationRecipientInformation
{

    /**
     * @var string $m_DataSourceID
     */
    protected $m_DataSourceID = null;

    /**
     * @var Connection $m_DataSourceConnection
     */
    protected $m_DataSourceConnection = null;

    /**
     * @var int $m_FilterType
     */
    protected $m_FilterType = null;

    /**
     * @var string $m_Filter
     */
    protected $m_Filter = null;

    /**
     * @var string $m_SelectOneQuery
     */
    protected $m_SelectOneQuery = null;

    /**
     * @var string $m_InsertQuery
     */
    protected $m_InsertQuery = null;

    /**
     * @var string $m_UpdateQuery
     */
    protected $m_UpdateQuery = null;

    /**
     * @var string $m_DeleteQuery
     */
    protected $m_DeleteQuery = null;

    /**
     * @param Connection $m_DataSourceConnection
     * @param int $m_FilterType
     */
    public function __construct($m_DataSourceConnection = null, $m_FilterType = null)
    {
      $this->m_DataSourceConnection = $m_DataSourceConnection;
      $this->m_FilterType = $m_FilterType;
    }

    /**
     * @return string
     */
    public function getM_DataSourceID()
    {
      return $this->m_DataSourceID;
    }

    /**
     * @param string $m_DataSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationRecipientInformation
     */
    public function setM_DataSourceID($m_DataSourceID)
    {
      $this->m_DataSourceID = $m_DataSourceID;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getM_DataSourceConnection()
    {
      return $this->m_DataSourceConnection;
    }

    /**
     * @param Connection $m_DataSourceConnection
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationRecipientInformation
     */
    public function setM_DataSourceConnection($m_DataSourceConnection)
    {
      $this->m_DataSourceConnection = $m_DataSourceConnection;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_FilterType()
    {
      return $this->m_FilterType;
    }

    /**
     * @param int $m_FilterType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationRecipientInformation
     */
    public function setM_FilterType($m_FilterType)
    {
      $this->m_FilterType = $m_FilterType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Filter()
    {
      return $this->m_Filter;
    }

    /**
     * @param string $m_Filter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationRecipientInformation
     */
    public function setM_Filter($m_Filter)
    {
      $this->m_Filter = $m_Filter;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_SelectOneQuery()
    {
      return $this->m_SelectOneQuery;
    }

    /**
     * @param string $m_SelectOneQuery
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationRecipientInformation
     */
    public function setM_SelectOneQuery($m_SelectOneQuery)
    {
      $this->m_SelectOneQuery = $m_SelectOneQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_InsertQuery()
    {
      return $this->m_InsertQuery;
    }

    /**
     * @param string $m_InsertQuery
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationRecipientInformation
     */
    public function setM_InsertQuery($m_InsertQuery)
    {
      $this->m_InsertQuery = $m_InsertQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_UpdateQuery()
    {
      return $this->m_UpdateQuery;
    }

    /**
     * @param string $m_UpdateQuery
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationRecipientInformation
     */
    public function setM_UpdateQuery($m_UpdateQuery)
    {
      $this->m_UpdateQuery = $m_UpdateQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_DeleteQuery()
    {
      return $this->m_DeleteQuery;
    }

    /**
     * @param string $m_DeleteQuery
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationRecipientInformation
     */
    public function setM_DeleteQuery($m_DeleteQuery)
    {
      $this->m_DeleteQuery = $m_DeleteQuery;
      return $this;
    }

}
