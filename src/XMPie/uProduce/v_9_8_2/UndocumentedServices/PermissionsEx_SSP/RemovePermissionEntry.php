<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP;

class RemovePermissionEntry
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
     * @var PermissionEx $inPermission
     */
    protected $inPermission = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param PermissionEx $inPermission
     */
    public function __construct($inUsername = null, $inPassword = null, $inPermission = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPermission = $inPermission;
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
     * @return RemovePermissionEntry
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
     * @return RemovePermissionEntry
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return PermissionEx
     */
    public function getInPermission()
    {
        return $this->inPermission;
    }

    /**
     * @param PermissionEx $inPermission
     * @return RemovePermissionEntry
     */
    public function setInPermission($inPermission)
    {
        $this->inPermission = $inPermission;
        return $this;
    }

}
