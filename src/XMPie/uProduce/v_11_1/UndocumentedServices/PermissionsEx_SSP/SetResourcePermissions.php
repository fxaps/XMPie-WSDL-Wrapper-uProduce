<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PermissionsEx_SSP;

class SetResourcePermissions
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
     * @var PermissionEntity $inResource
     */
    protected $inResource = null;

    /**
     * @var string $inActorType
     */
    protected $inActorType = null;

    /**
     * @var ArrayOfString $inActorIDs
     */
    protected $inActorIDs = null;

    /**
     * @var PermissionDetails $inDetails
     */
    protected $inDetails = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param PermissionEntity $inResource
     * @param string $inActorType
     * @param ArrayOfString $inActorIDs
     * @param PermissionDetails $inDetails
     */
    public function __construct($inUsername = null, $inPassword = null, $inResource = null, $inActorType = null, $inActorIDs = null, $inDetails = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inResource = $inResource;
      $this->inActorType = $inActorType;
      $this->inActorIDs = $inActorIDs;
      $this->inDetails = $inDetails;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PermissionsEx_SSP\SetResourcePermissions
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PermissionsEx_SSP\SetResourcePermissions
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PermissionsEx_SSP\SetResourcePermissions
     */
    public function setInResource($inResource)
    {
      $this->inResource = $inResource;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PermissionsEx_SSP\SetResourcePermissions
     */
    public function setInActorType($inActorType)
    {
      $this->inActorType = $inActorType;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInActorIDs()
    {
      return $this->inActorIDs;
    }

    /**
     * @param ArrayOfString $inActorIDs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PermissionsEx_SSP\SetResourcePermissions
     */
    public function setInActorIDs($inActorIDs)
    {
      $this->inActorIDs = $inActorIDs;
      return $this;
    }

    /**
     * @return PermissionDetails
     */
    public function getInDetails()
    {
      return $this->inDetails;
    }

    /**
     * @param PermissionDetails $inDetails
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PermissionsEx_SSP\SetResourcePermissions
     */
    public function setInDetails($inDetails)
    {
      $this->inDetails = $inDetails;
      return $this;
    }

}
