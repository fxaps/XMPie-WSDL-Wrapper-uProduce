<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP;

class GetActorPermissions
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
     * @var string $inResouceType
     */
    protected $inResouceType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param PermissionEntity $inActor
     * @param string $inResouceType
     */
    public function __construct($inUsername = null, $inPassword = null, $inActor = null, $inResouceType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inActor = $inActor;
      $this->inResouceType = $inResouceType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP\GetActorPermissions
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP\GetActorPermissions
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP\GetActorPermissions
     */
    public function setInActor($inActor)
    {
      $this->inActor = $inActor;
      return $this;
    }

    /**
     * @return string
     */
    public function getInResouceType()
    {
      return $this->inResouceType;
    }

    /**
     * @param string $inResouceType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP\GetActorPermissions
     */
    public function setInResouceType($inResouceType)
    {
      $this->inResouceType = $inResouceType;
      return $this;
    }

}
