<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Permissions_SSP;

class GetPermittedUsers
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
     * @var string $inResourceType
     */
    protected $inResourceType = null;

    /**
     * @var string $inResourceID
     */
    protected $inResourceID = null;

    /**
     * @var string $inActionType
     */
    protected $inActionType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inResourceType
     * @param string $inResourceID
     * @param string $inActionType
     */
    public function __construct($inUsername = null, $inPassword = null, $inResourceType = null, $inResourceID = null, $inActionType = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inResourceType = $inResourceType;
        $this->inResourceID = $inResourceID;
        $this->inActionType = $inActionType;
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
     * @return GetPermittedUsers
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
     * @return GetPermittedUsers
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInResourceType()
    {
        return $this->inResourceType;
    }

    /**
     * @param string $inResourceType
     * @return GetPermittedUsers
     */
    public function setInResourceType($inResourceType)
    {
        $this->inResourceType = $inResourceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getInResourceID()
    {
        return $this->inResourceID;
    }

    /**
     * @param string $inResourceID
     * @return GetPermittedUsers
     */
    public function setInResourceID($inResourceID)
    {
        $this->inResourceID = $inResourceID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInActionType()
    {
        return $this->inActionType;
    }

    /**
     * @param string $inActionType
     * @return GetPermittedUsers
     */
    public function setInActionType($inActionType)
    {
        $this->inActionType = $inActionType;
        return $this;
    }

}
