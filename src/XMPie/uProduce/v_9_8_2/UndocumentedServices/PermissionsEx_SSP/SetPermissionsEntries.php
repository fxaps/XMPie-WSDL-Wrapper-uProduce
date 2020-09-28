<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP;

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
     * @return SetPermissionsEntries
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
     * @return SetPermissionsEntries
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
     * @return SetPermissionsEntries
     */
    public function setInPermissions($inPermissions)
    {
        $this->inPermissions = $inPermissions;
        return $this;
    }

}
