<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\PermissionsEx_SSP;

class PermissionEx
{

    /**
     * @var PermissionEntity $m_Actor
     */
    protected $m_Actor = null;

    /**
     * @var PermissionEntity $m_Resource
     */
    protected $m_Resource = null;

    /**
     * @var PermissionDetails $m_Details
     */
    protected $m_Details = null;

    /**
     * @param PermissionEntity $m_Actor
     * @param PermissionEntity $m_Resource
     * @param PermissionDetails $m_Details
     */
    public function __construct($m_Actor = null, $m_Resource = null, $m_Details = null)
    {
      $this->m_Actor = $m_Actor;
      $this->m_Resource = $m_Resource;
      $this->m_Details = $m_Details;
    }

    /**
     * @return PermissionEntity
     */
    public function getM_Actor()
    {
      return $this->m_Actor;
    }

    /**
     * @param PermissionEntity $m_Actor
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\PermissionsEx_SSP\PermissionEx
     */
    public function setM_Actor($m_Actor)
    {
      $this->m_Actor = $m_Actor;
      return $this;
    }

    /**
     * @return PermissionEntity
     */
    public function getM_Resource()
    {
      return $this->m_Resource;
    }

    /**
     * @param PermissionEntity $m_Resource
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\PermissionsEx_SSP\PermissionEx
     */
    public function setM_Resource($m_Resource)
    {
      $this->m_Resource = $m_Resource;
      return $this;
    }

    /**
     * @return PermissionDetails
     */
    public function getM_Details()
    {
      return $this->m_Details;
    }

    /**
     * @param PermissionDetails $m_Details
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\PermissionsEx_SSP\PermissionEx
     */
    public function setM_Details($m_Details)
    {
      $this->m_Details = $m_Details;
      return $this;
    }

}
