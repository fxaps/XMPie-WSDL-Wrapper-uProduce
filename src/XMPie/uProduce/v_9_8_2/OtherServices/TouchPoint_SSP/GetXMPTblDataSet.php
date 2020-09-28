<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\TouchPoint_SSP;

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
     * @var string $inTouchPointID
     */
    protected $inTouchPointID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTouchPointID
     */
    public function __construct($inUsername = null, $inPassword = null, $inTouchPointID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTouchPointID = $inTouchPointID;
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
    public function getInTouchPointID()
    {
        return $this->inTouchPointID;
    }

    /**
     * @param string $inTouchPointID
     * @return GetXMPTblDataSet
     */
    public function setInTouchPointID($inTouchPointID)
    {
        $this->inTouchPointID = $inTouchPointID;
        return $this;
    }

}
