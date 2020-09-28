<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetNthAssetSourceName
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
     * @var int $inAssetSourceIndex
     */
    protected $inAssetSourceIndex = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param int $inAssetSourceIndex
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inAssetSourceIndex = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inAssetSourceIndex = $inAssetSourceIndex;
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
     * @return GetNthAssetSourceName
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
     * @return GetNthAssetSourceName
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
     * @return GetNthAssetSourceName
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return int
     */
    public function getInAssetSourceIndex()
    {
        return $this->inAssetSourceIndex;
    }

    /**
     * @param int $inAssetSourceIndex
     * @return GetNthAssetSourceName
     */
    public function setInAssetSourceIndex($inAssetSourceIndex)
    {
        $this->inAssetSourceIndex = $inAssetSourceIndex;
        return $this;
    }

}
