<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\OtherServices\Permissions_SSP;

class XMPTblDataSet
{

    /**
     * @var ArrayOfXMPTbl $m_Tables
     */
    protected $m_Tables = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfXMPTbl
     */
    public function getM_Tables()
    {
      return $this->m_Tables;
    }

    /**
     * @param ArrayOfXMPTbl $m_Tables
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\OtherServices\Permissions_SSP\XMPTblDataSet
     */
    public function setM_Tables($m_Tables)
    {
      $this->m_Tables = $m_Tables;
      return $this;
    }

}