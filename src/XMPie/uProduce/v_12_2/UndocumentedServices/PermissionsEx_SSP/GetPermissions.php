<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP;

class GetPermissions
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var PermissionEntity $inActor
     */
    protected $inActor = null;

    /**
     * @var PermissionEntity $inResource
     */
    protected $inResource = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param PermissionEntity $inActor
     * @param PermissionEntity $inResource
     */
    public function __construct($inUsername = null, $inPassword = null, $inActor = null, $inResource = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inActor = $inActor;
      $this->inResource = $inResource;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetPermissions
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetPermissions
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return PermissionEntity
     */
    public function getInActor()
    {
      return $this->inActor;
    }

    /**
     * @param PermissionEntity $inActor
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetPermissions
     */
    public function setInActor($inActor)
    {
      $this->inActor = $inActor;
      return $this;
    }

    /**
     * @return PermissionEntity
     */
    public function getInResource()
    {
      return $this->inResource;
    }

    /**
     * @param PermissionEntity $inResource
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetPermissions
     */
    public function setInResource($inResource)
    {
      $this->inResource = $inResource;
      return $this;
    }

}
