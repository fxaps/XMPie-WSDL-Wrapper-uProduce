<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\JobMessage_SSP;

class XMPTblColumn
{

    /**
     * @var string $m_ColumnName
     */
    protected $m_ColumnName = null;

    /**
     * @var string $m_ColumnType
     */
    protected $m_ColumnType = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getM_ColumnName()
    {
        return $this->m_ColumnName;
    }

    /**
     * @param string $m_ColumnName
     * @return XMPTblColumn
     */
    public function setM_ColumnName($m_ColumnName)
    {
        $this->m_ColumnName = $m_ColumnName;
        return $this;
    }

    /**
     * @return string
     */
    public function getM_ColumnType()
    {
        return $this->m_ColumnType;
    }

    /**
     * @param string $m_ColumnType
     * @return XMPTblColumn
     */
    public function setM_ColumnType($m_ColumnType)
    {
        $this->m_ColumnType = $m_ColumnType;
        return $this;
    }

}
