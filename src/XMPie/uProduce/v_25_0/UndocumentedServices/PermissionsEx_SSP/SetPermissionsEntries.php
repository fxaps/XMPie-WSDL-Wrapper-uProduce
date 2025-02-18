<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP;

class SetPermissionsEntries
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
     * @var ArrayOfPermissionEx $inPermissions
     */
    protected $inPermissions = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfPermissionEx $inPermissions
     */
    public function __construct($inUsername = null, $inPassword = null, $inPermissions = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPermissions = $inPermissions;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP\SetPermissionsEntries
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP\SetPermissionsEntries
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfPermissionEx
     */
    public function getInPermissions()
    {
      return $this->inPermissions;
    }

    /**
     * @param ArrayOfPermissionEx $inPermissions
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP\SetPermissionsEntries
     */
    public function setInPermissions($inPermissions)
    {
      $this->inPermissions = $inPermissions;
      return $this;
    }

}
