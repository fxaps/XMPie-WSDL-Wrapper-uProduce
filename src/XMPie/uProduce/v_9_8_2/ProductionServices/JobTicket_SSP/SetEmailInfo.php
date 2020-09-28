<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetEmailInfo
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
     * @var string $inTicketID
     */
    protected $inTicketID = null;

    /**
     * @var string $inEmailADORName
     */
    protected $inEmailADORName = null;

    /**
     * @var string $inSenderADORName
     */
    protected $inSenderADORName = null;

    /**
     * @var string $inSubjectADORName
     */
    protected $inSubjectADORName = null;

    /**
     * @var boolean $inEmbed
     */
    protected $inEmbed = null;

    /**
     * @var string $inOutputType
     */
    protected $inOutputType = null;

    /**
     * @var string $inBaseURL
     */
    protected $inBaseURL = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inEmailADORName
     * @param string $inSenderADORName
     * @param string $inSubjectADORName
     * @param boolean $inEmbed
     * @param string $inOutputType
     * @param string $inBaseURL
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inEmailADORName = null, $inSenderADORName = null, $inSubjectADORName = null, $inEmbed = null, $inOutputType = null, $inBaseURL = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inEmailADORName = $inEmailADORName;
        $this->inSenderADORName = $inSenderADORName;
        $this->inSubjectADORName = $inSubjectADORName;
        $this->inEmbed = $inEmbed;
        $this->inOutputType = $inOutputType;
        $this->inBaseURL = $inBaseURL;
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
     * @return SetEmailInfo
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
     * @return SetEmailInfo
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInTicketID()
    {
        return $this->inTicketID;
    }

    /**
     * @param string $inTicketID
     * @return SetEmailInfo
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInEmailADORName()
    {
        return $this->inEmailADORName;
    }

    /**
     * @param string $inEmailADORName
     * @return SetEmailInfo
     */
    public function setInEmailADORName($inEmailADORName)
    {
        $this->inEmailADORName = $inEmailADORName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInSenderADORName()
    {
        return $this->inSenderADORName;
    }

    /**
     * @param string $inSenderADORName
     * @return SetEmailInfo
     */
    public function setInSenderADORName($inSenderADORName)
    {
        $this->inSenderADORName = $inSenderADORName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInSubjectADORName()
    {
        return $this->inSubjectADORName;
    }

    /**
     * @param string $inSubjectADORName
     * @return SetEmailInfo
     */
    public function setInSubjectADORName($inSubjectADORName)
    {
        $this->inSubjectADORName = $inSubjectADORName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInEmbed()
    {
        return $this->inEmbed;
    }

    /**
     * @param boolean $inEmbed
     * @return SetEmailInfo
     */
    public function setInEmbed($inEmbed)
    {
        $this->inEmbed = $inEmbed;
        return $this;
    }

    /**
     * @return string
     */
    public function getInOutputType()
    {
        return $this->inOutputType;
    }

    /**
     * @param string $inOutputType
     * @return SetEmailInfo
     */
    public function setInOutputType($inOutputType)
    {
        $this->inOutputType = $inOutputType;
        return $this;
    }

    /**
     * @return string
     */
    public function getInBaseURL()
    {
        return $this->inBaseURL;
    }

    /**
     * @param string $inBaseURL
     * @return SetEmailInfo
     */
    public function setInBaseURL($inBaseURL)
    {
        $this->inBaseURL = $inBaseURL;
        return $this;
    }

}
