<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\UpdateDataSource_SSP;

class UploadedFieldMappingInfo
{

    /**
     * @var string $m_OriginalFieldName
     */
    protected $m_OriginalFieldName = null;

    /**
     * @var EFieldMappingTypes $m_MappingType
     */
    protected $m_MappingType = null;

    /**
     * @var string $m_MappingValue
     */
    protected $m_MappingValue = null;

    /**
     * @param EFieldMappingTypes $m_MappingType
     */
    public function __construct($m_MappingType = null)
    {
      $this->m_MappingType = $m_MappingType;
    }

    /**
     * @return string
     */
    public function getM_OriginalFieldName()
    {
      return $this->m_OriginalFieldName;
    }

    /**
     * @param string $m_OriginalFieldName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\UpdateDataSource_SSP\UploadedFieldMappingInfo
     */
    public function setM_OriginalFieldName($m_OriginalFieldName)
    {
      $this->m_OriginalFieldName = $m_OriginalFieldName;
      return $this;
    }

    /**
     * @return EFieldMappingTypes
     */
    public function getM_MappingType()
    {
      return $this->m_MappingType;
    }

    /**
     * @param EFieldMappingTypes $m_MappingType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\UpdateDataSource_SSP\UploadedFieldMappingInfo
     */
    public function setM_MappingType($m_MappingType)
    {
      $this->m_MappingType = $m_MappingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_MappingValue()
    {
      return $this->m_MappingValue;
    }

    /**
     * @param string $m_MappingValue
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\UpdateDataSource_SSP\UploadedFieldMappingInfo
     */
    public function setM_MappingValue($m_MappingValue)
    {
      $this->m_MappingValue = $m_MappingValue;
      return $this;
    }

}
