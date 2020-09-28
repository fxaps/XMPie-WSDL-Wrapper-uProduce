<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\TouchPoint_SSP;

class SetName
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
     * @var string $inTouchPointID
     */
    protected $inTouchPointID = null;

    /**
     * @var string $intTouchpointName
     */
    protected $intTouchpointName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTouchPointID
     * @param string $intTouchpointName
     */
    public function __construct($inUsername = null, $inPassword = null, $inTouchPointID = null, $intTouchpointName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTouchPointID = $inTouchPointID;
        $this->intTouchpointName = $intTouchpointName;
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
     * @return SetName
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
     * @return SetName
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInTouchPointID()
    {
        return $this->inTouchPointID;
    }

    /**
     * @param string $inTouchPointID
     * @return SetName
     */
    public function setInTouchPointID($inTouchPointID)
    {
        $this->inTouchPointID = $inTouchPointID;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntTouchpointName()
    {
        return $this->intTouchpointName;
    }

    /**
     * @param string $intTouchpointName
     * @return SetName
     */
    public function setIntTouchpointName($intTouchpointName)
    {
        $this->intTouchpointName = $intTouchpointName;
        return $this;
    }

}
