<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class SendMailByRun
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
     * @var string $inRunGUID
     */
    protected $inRunGUID = null;

    /**
     * @var string $inEmailMarketingID
     */
    protected $inEmailMarketingID = null;

    /**
     * @var ArrayOfString $inRecipientIDs
     */
    protected $inRecipientIDs = null;

    /**
     * @var EmailHeaderInfo $overrideHeader
     */
    protected $overrideHeader = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inRunGUID
     * @param string $inEmailMarketingID
     * @param ArrayOfString $inRecipientIDs
     * @param EmailHeaderInfo $overrideHeader
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inRunGUID = null, $inEmailMarketingID = null, $inRecipientIDs = null, $overrideHeader = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inRunGUID = $inRunGUID;
        $this->inEmailMarketingID = $inEmailMarketingID;
        $this->inRecipientIDs = $inRecipientIDs;
        $this->overrideHeader = $overrideHeader;
        $this->inProps = $inProps;
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
     * @return SendMailByRun
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
     * @return SendMailByRun
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInRunGUID()
    {
        return $this->inRunGUID;
    }

    /**
     * @param string $inRunGUID
     * @return SendMailByRun
     */
    public function setInRunGUID($inRunGUID)
    {
        $this->inRunGUID = $inRunGUID;
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
     * @return SendMailByRun
     */
    public function setInEmailMarketingID($inEmailMarketingID)
    {
        $this->inEmailMarketingID = $inEmailMarketingID;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInRecipientIDs()
    {
        return $this->inRecipientIDs;
    }

    /**
     * @param ArrayOfString $inRecipientIDs
     * @return SendMailByRun
     */
    public function setInRecipientIDs($inRecipientIDs)
    {
        $this->inRecipientIDs = $inRecipientIDs;
        return $this;
    }

    /**
     * @return EmailHeaderInfo
     */
    public function getOverrideHeader()
    {
        return $this->overrideHeader;
    }

    /**
     * @param EmailHeaderInfo $overrideHeader
     * @return SendMailByRun
     */
    public function setOverrideHeader($overrideHeader)
    {
        $this->overrideHeader = $overrideHeader;
        return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
        return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return SendMailByRun
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}
