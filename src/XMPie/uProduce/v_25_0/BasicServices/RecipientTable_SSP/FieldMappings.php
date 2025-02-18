<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\RecipientTable_SSP;

class FieldMappings
{

    /**
     * @var ArrayOfFieldMappingInfo $m_mappings
     */
    protected $m_mappings = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfFieldMappingInfo
     */
    public function getM_mappings()
    {
      return $this->m_mappings;
    }

    /**
     * @param ArrayOfFieldMappingInfo $m_mappings
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\RecipientTable_SSP\FieldMappings
     */
    public function setM_mappings($m_mappings)
    {
      $this->m_mappings = $m_mappings;
      return $this;
    }

}
