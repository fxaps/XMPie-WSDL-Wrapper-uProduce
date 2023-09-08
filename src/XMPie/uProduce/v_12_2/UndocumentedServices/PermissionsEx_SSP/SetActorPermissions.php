<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP;

class SetActorPermissions
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
     * @var ArrayOfString $inResourceIDs
     */
    protected $inResourceIDs = null;

    /**
     * @var PermissionDetails $inDetails
     */
    protected $inDetails = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param PermissionEntity $inActor
     * @param string $inResouceType
     * @param ArrayOfString $inResourceIDs
     * @param PermissionDetails $inDetails
     */
    public function __construct($inUsername = null, $inPassword = null, $inActor = null, $inResouceType = null, $inResourceIDs = null, $inDetails = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inActor = $inActor;
      $this->inResouceType = $inResouceType;
      $this->inResourceIDs = $inResourceIDs;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetActorPermissions
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetActorPermissions
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetActorPermissions
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetActorPermissions
     */
    public function setInResouceType($inResouceType)
    {
      $this->inResouceType = $inResouceType;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInResourceIDs()
    {
      return $this->inResourceIDs;
    }

    /**
     * @param ArrayOfString $inResourceIDs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetActorPermissions
     */
    public function setInResourceIDs($inResourceIDs)
    {
      $this->inResourceIDs = $inResourceIDs;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetActorPermissions
     */
    public function setInDetails($inDetails)
    {
      $this->inDetails = $inDetails;
      return $this;
    }

}
