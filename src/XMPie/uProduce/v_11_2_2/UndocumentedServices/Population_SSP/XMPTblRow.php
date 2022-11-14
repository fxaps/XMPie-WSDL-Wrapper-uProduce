<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\Population_SSP;

class XMPTblRow
{

    /**
     * @var ArrayOfXMPRowField $m_Fields
     */
    protected $m_Fields = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfXMPRowField
     */
    public function getM_Fields()
    {
      return $this->m_Fields;
    }

    /**
     * @param ArrayOfXMPRowField $m_Fields
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\Population_SSP\XMPTblRow
     */
    public function setM_Fields($m_Fields)
    {
      $this->m_Fields = $m_Fields;
      return $this;
    }

}
