<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetDocumentResourcesFolder
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
     * @var string $inDocumentResourcesFolder
     */
    protected $inDocumentResourcesFolder = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inDocumentResourcesFolder
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inDocumentResourcesFolder = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inDocumentResourcesFolder = $inDocumentResourcesFolder;
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
     * @return SetDocumentResourcesFolder
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
     * @return SetDocumentResourcesFolder
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
     * @return SetDocumentResourcesFolder
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentResourcesFolder()
    {
        return $this->inDocumentResourcesFolder;
    }

    /**
     * @param string $inDocumentResourcesFolder
     * @return SetDocumentResourcesFolder
     */
    public function setInDocumentResourcesFolder($inDocumentResourcesFolder)
    {
        $this->inDocumentResourcesFolder = $inDocumentResourcesFolder;
        return $this;
    }

}
