<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetDocumentID
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
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

    /**
     * @var string $inDocumentName
     */
    protected $inDocumentName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inDocumentName
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inDocumentName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inCampaignID = $inCampaignID;
        $this->inDocumentName = $inDocumentName;
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
     * @return GetDocumentID
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
     * @return GetDocumentID
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignID()
    {
        return $this->inCampaignID;
    }

    /**
     * @param string $inCampaignID
     * @return GetDocumentID
     */
    public function setInCampaignID($inCampaignID)
    {
        $this->inCampaignID = $inCampaignID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentName()
    {
        return $this->inDocumentName;
    }

    /**
     * @param string $inDocumentName
     * @return GetDocumentID
     */
    public function setInDocumentName($inDocumentName)
    {
        $this->inDocumentName = $inDocumentName;
        return $this;
    }

}
