<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\UpdateDataSource_SSP;

class UploadedFieldMappings
{

    /**
     * @var ArrayOfUploadedFieldMappingInfo $m_mappings
     */
    protected $m_mappings = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfUploadedFieldMappingInfo
     */
    public function getM_mappings()
    {
      return $this->m_mappings;
    }

    /**
     * @param ArrayOfUploadedFieldMappingInfo $m_mappings
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\UpdateDataSource_SSP\UploadedFieldMappings
     */
    public function setM_mappings($m_mappings)
    {
      $this->m_mappings = $m_mappings;
      return $this;
    }

}
