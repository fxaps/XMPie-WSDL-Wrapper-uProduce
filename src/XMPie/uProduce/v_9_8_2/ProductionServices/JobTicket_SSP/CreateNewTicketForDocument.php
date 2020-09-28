<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class CreateNewTicketForDocument
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
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var string $inRITableName
     */
    protected $inRITableName = null;

    /**
     * @var boolean $inFlatOriented
     */
    protected $inFlatOriented = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param string $inRITableName
     * @param boolean $inFlatOriented
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inRITableName = null, $inFlatOriented = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDocumentID = $inDocumentID;
        $this->inRITableName = $inRITableName;
        $this->inFlatOriented = $inFlatOriented;
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
     * @return CreateNewTicketForDocument
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
     * @return CreateNewTicketForDocument
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentID()
    {
        return $this->inDocumentID;
    }

    /**
     * @param string $inDocumentID
     * @return CreateNewTicketForDocument
     */
    public function setInDocumentID($inDocumentID)
    {
        $this->inDocumentID = $inDocumentID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInRITableName()
    {
        return $this->inRITableName;
    }

    /**
     * @param string $inRITableName
     * @return CreateNewTicketForDocument
     */
    public function setInRITableName($inRITableName)
    {
        $this->inRITableName = $inRITableName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInFlatOriented()
    {
        return $this->inFlatOriented;
    }

    /**
     * @param boolean $inFlatOriented
     * @return CreateNewTicketForDocument
     */
    public function setInFlatOriented($inFlatOriented)
    {
        $this->inFlatOriented = $inFlatOriented;
        return $this;
    }

}
