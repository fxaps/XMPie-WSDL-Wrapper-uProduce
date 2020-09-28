<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP;

class GetResourcePermissions
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
     * @var string $inActorType
     */
    protected $inActorType = null;

    /**
     * @var PermissionEntity $inResouce
     */
    protected $inResouce = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inActorType
     * @param PermissionEntity $inResouce
     */
    public function __construct($inUsername = null, $inPassword = null, $inActorType = null, $inResouce = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inActorType = $inActorType;
      $this->inResouce = $inResouce;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP\GetResourcePermissions
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP\GetResourcePermissions
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInActorType()
    {
      return $this->inActorType;
    }

    /**
     * @param string $inActorType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP\GetResourcePermissions
     */
    public function setInActorType($inActorType)
    {
      $this->inActorType = $inActorType;
      return $this;
    }

    /**
     * @return PermissionEntity
     */
    public function getInResouce()
    {
      return $this->inResouce;
    }

    /**
     * @param PermissionEntity $inResouce
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP\GetResourcePermissions
     */
    public function setInResouce($inResouce)
    {
      $this->inResouce = $inResouce;
      return $this;
    }

}
