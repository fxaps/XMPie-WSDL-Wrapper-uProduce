<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Permissions_SSP;

class GetXMPTblDataSet
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
     * @var string $inUserID
     */
    protected $inUserID = null;

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
     * @param string $inUserID
     * @param string $inResourceType
     * @param string $inResourceID
     * @param string $inActionType
     */
    public function __construct($inUsername = null, $inPassword = null, $inUserID = null, $inResourceType = null, $inResourceID = null, $inActionType = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inUserID = $inUserID;
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
     * @return GetXMPTblDataSet
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
     * @return GetXMPTblDataSet
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInUserID()
    {
        return $this->inUserID;
    }

    /**
     * @param string $inUserID
     * @return GetXMPTblDataSet
     */
    public function setInUserID($inUserID)
    {
        $this->inUserID = $inUserID;
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
     * @return GetXMPTblDataSet
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
     * @return GetXMPTblDataSet
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
     * @return GetXMPTblDataSet
     */
    public function setInActionType($inActionType)
    {
        $this->inActionType = $inActionType;
        return $this;
    }

}
