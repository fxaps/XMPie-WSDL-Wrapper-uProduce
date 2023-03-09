<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\UpdateDataSource_SSP;

class XMPTblMatching
{

    /**
     * @var string $m_TableName
     */
    protected $m_TableName = null;

    /**
     * @var boolean $m_IsMatching
     */
    protected $m_IsMatching = null;

    /**
     * @param boolean $m_IsMatching
     */
    public function __construct($m_IsMatching = null)
    {
      $this->m_IsMatching = $m_IsMatching;
    }

    /**
     * @return string
     */
    public function getM_TableName()
    {
      return $this->m_TableName;
    }

    /**
     * @param string $m_TableName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\UpdateDataSource_SSP\XMPTblMatching
     */
    public function setM_TableName($m_TableName)
    {
      $this->m_TableName = $m_TableName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_IsMatching()
    {
      return $this->m_IsMatching;
    }

    /**
     * @param boolean $m_IsMatching
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\UpdateDataSource_SSP\XMPTblMatching
     */
    public function setM_IsMatching($m_IsMatching)
    {
      $this->m_IsMatching = $m_IsMatching;
      return $this;
    }

}
