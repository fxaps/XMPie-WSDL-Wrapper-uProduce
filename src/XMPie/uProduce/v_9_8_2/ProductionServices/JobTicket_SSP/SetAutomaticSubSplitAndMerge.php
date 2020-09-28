<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetAutomaticSubSplitAndMerge
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
     * @var boolean $inEnableAutomaticSubSplit
     */
    protected $inEnableAutomaticSubSplit = null;

    /**
     * @var boolean $inEnableAutomaticMerge
     */
    protected $inEnableAutomaticMerge = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param boolean $inEnableAutomaticSubSplit
     * @param boolean $inEnableAutomaticMerge
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inEnableAutomaticSubSplit = null, $inEnableAutomaticMerge = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inEnableAutomaticSubSplit = $inEnableAutomaticSubSplit;
        $this->inEnableAutomaticMerge = $inEnableAutomaticMerge;
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
     * @return SetAutomaticSubSplitAndMerge
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
     * @return SetAutomaticSubSplitAndMerge
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
     * @return SetAutomaticSubSplitAndMerge
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInEnableAutomaticSubSplit()
    {
        return $this->inEnableAutomaticSubSplit;
    }

    /**
     * @param boolean $inEnableAutomaticSubSplit
     * @return SetAutomaticSubSplitAndMerge
     */
    public function setInEnableAutomaticSubSplit($inEnableAutomaticSubSplit)
    {
        $this->inEnableAutomaticSubSplit = $inEnableAutomaticSubSplit;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInEnableAutomaticMerge()
    {
        return $this->inEnableAutomaticMerge;
    }

    /**
     * @param boolean $inEnableAutomaticMerge
     * @return SetAutomaticSubSplitAndMerge
     */
    public function setInEnableAutomaticMerge($inEnableAutomaticMerge)
    {
        $this->inEnableAutomaticMerge = $inEnableAutomaticMerge;
        return $this;
    }

}
