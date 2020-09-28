<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class DeleteDocuments
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
     * @var ArrayOfString $inDocumentIDArray
     */
    protected $inDocumentIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inDocumentIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inDocumentIDArray = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inCampaignID = $inCampaignID;
        $this->inDocumentIDArray = $inDocumentIDArray;
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
     * @return DeleteDocuments
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
     * @return DeleteDocuments
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
     * @return DeleteDocuments
     */
    public function setInCampaignID($inCampaignID)
    {
        $this->inCampaignID = $inCampaignID;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDocumentIDArray()
    {
        return $this->inDocumentIDArray;
    }

    /**
     * @param ArrayOfString $inDocumentIDArray
     * @return DeleteDocuments
     */
    public function setInDocumentIDArray($inDocumentIDArray)
    {
        $this->inDocumentIDArray = $inDocumentIDArray;
        return $this;
    }

}
