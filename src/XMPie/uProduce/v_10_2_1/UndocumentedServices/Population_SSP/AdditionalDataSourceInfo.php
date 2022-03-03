<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP;

class AdditionalDataSourceInfo
{

    /**
     * @var string $m_SchemaName
     */
    protected $m_SchemaName = null;

    /**
     * @var string $m_DataSourceID
     */
    protected $m_DataSourceID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_SchemaName()
    {
      return $this->m_SchemaName;
    }

    /**
     * @param string $m_SchemaName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP\AdditionalDataSourceInfo
     */
    public function setM_SchemaName($m_SchemaName)
    {
      $this->m_SchemaName = $m_SchemaName;
      return $this;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP\AdditionalDataSourceInfo
     */
    public function setM_DataSourceID($m_DataSourceID)
    {
      $this->m_DataSourceID = $m_DataSourceID;
      return $this;
    }

}
