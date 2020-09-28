<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP;

class XMPRowField
{

    /**
     * @var string $m_FieldValue
     */
    protected $m_FieldValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_FieldValue()
    {
      return $this->m_FieldValue;
    }

    /**
     * @param string $m_FieldValue
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\XMPRowField
     */
    public function setM_FieldValue($m_FieldValue)
    {
      $this->m_FieldValue = $m_FieldValue;
      return $this;
    }

}
