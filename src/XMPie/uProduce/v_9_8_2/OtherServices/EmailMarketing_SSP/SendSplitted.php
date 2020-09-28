<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class SendSplitted
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
     * @var string $inEmailMarketingID
     */
    protected $inEmailMarketingID = null;

    /**
     * @var string $inJobTicket
     */
    protected $inJobTicket = null;

    /**
     * @var string $inSplittingType
     */
    protected $inSplittingType = null;

    /**
     * @var string $inSplittingInfo
     */
    protected $inSplittingInfo = null;

    /**
     * @var string $inJobName
     */
    protected $inJobName = null;

    /**
     * @var string $inPriority
     */
    protected $inPriority = null;

    /**
     * @var string $inTouchPointID
     */
    protected $inTouchPointID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inEmailMarketingID
     * @param string $inJobTicket
     * @param string $inSplittingType
     * @param string $inSplittingInfo
     * @param string $inJobName
     * @param string $inPriority
     * @param string $inTouchPointID
     */
    public function __construct($inUsername = null, $inPassword = null, $inEmailMarketingID = null, $inJobTicket = null, $inSplittingType = null, $inSplittingInfo = null, $inJobName = null, $inPriority = null, $inTouchPointID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inEmailMarketingID = $inEmailMarketingID;
        $this->inJobTicket = $inJobTicket;
        $this->inSplittingType = $inSplittingType;
        $this->inSplittingInfo = $inSplittingInfo;
        $this->inJobName = $inJobName;
        $this->inPriority = $inPriority;
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
     * @return SendSplitted
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
     * @return SendSplitted
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInEmailMarketingID()
    {
        return $this->inEmailMarketingID;
    }

    /**
     * @param string $inEmailMarketingID
     * @return SendSplitted
     */
    public function setInEmailMarketingID($inEmailMarketingID)
    {
        $this->inEmailMarketingID = $inEmailMarketingID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInJobTicket()
    {
        return $this->inJobTicket;
    }

    /**
     * @param string $inJobTicket
     * @return SendSplitted
     */
    public function setInJobTicket($inJobTicket)
    {
        $this->inJobTicket = $inJobTicket;
        return $this;
    }

    /**
     * @return string
     */
    public function getInSplittingType()
    {
        return $this->inSplittingType;
    }

    /**
     * @param string $inSplittingType
     * @return SendSplitted
     */
    public function setInSplittingType($inSplittingType)
    {
        $this->inSplittingType = $inSplittingType;
        return $this;
    }

    /**
     * @return string
     */
    public function getInSplittingInfo()
    {
        return $this->inSplittingInfo;
    }

    /**
     * @param string $inSplittingInfo
     * @return SendSplitted
     */
    public function setInSplittingInfo($inSplittingInfo)
    {
        $this->inSplittingInfo = $inSplittingInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getInJobName()
    {
        return $this->inJobName;
    }

    /**
     * @param string $inJobName
     * @return SendSplitted
     */
    public function setInJobName($inJobName)
    {
        $this->inJobName = $inJobName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPriority()
    {
        return $this->inPriority;
    }

    /**
     * @param string $inPriority
     * @return SendSplitted
     */
    public function setInPriority($inPriority)
    {
        $this->inPriority = $inPriority;
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
     * @return SendSplitted
     */
    public function setInTouchPointID($inTouchPointID)
    {
        $this->inTouchPointID = $inTouchPointID;
        return $this;
    }

}
