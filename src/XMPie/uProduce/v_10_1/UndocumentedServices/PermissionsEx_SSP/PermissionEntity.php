<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\PermissionsEx_SSP;

class PermissionEntity
{

    /**
     * @var string $m_ID
     */
    protected $m_ID = null;

    /**
     * @var string $m_Type
     */
    protected $m_Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_ID()
    {
      return $this->m_ID;
    }

    /**
     * @param string $m_ID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\PermissionsEx_SSP\PermissionEntity
     */
    public function setM_ID($m_ID)
    {
      $this->m_ID = $m_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Type()
    {
      return $this->m_Type;
    }

    /**
     * @param string $m_Type
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\PermissionsEx_SSP\PermissionEntity
     */
    public function setM_Type($m_Type)
    {
      $this->m_Type = $m_Type;
      return $this;
    }

}
