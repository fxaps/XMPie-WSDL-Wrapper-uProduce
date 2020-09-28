<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetRIsByID
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
     * @var ArrayOfRecipientsInfo $inRIInfos
     */
    protected $inRIInfos = null;

    /**
     * @var ArrayOfString $inDataSourceIDArray
     */
    protected $inDataSourceIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfRecipientsInfo $inRIInfos
     * @param ArrayOfString $inDataSourceIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inRIInfos = null, $inDataSourceIDArray = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inRIInfos = $inRIInfos;
        $this->inDataSourceIDArray = $inDataSourceIDArray;
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
     * @return SetRIsByID
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
     * @return SetRIsByID
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
     * @return SetRIsByID
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return ArrayOfRecipientsInfo
     */
    public function getInRIInfos()
    {
        return $this->inRIInfos;
    }

    /**
     * @param ArrayOfRecipientsInfo $inRIInfos
     * @return SetRIsByID
     */
    public function setInRIInfos($inRIInfos)
    {
        $this->inRIInfos = $inRIInfos;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDataSourceIDArray()
    {
        return $this->inDataSourceIDArray;
    }

    /**
     * @param ArrayOfString $inDataSourceIDArray
     * @return SetRIsByID
     */
    public function setInDataSourceIDArray($inDataSourceIDArray)
    {
        $this->inDataSourceIDArray = $inDataSourceIDArray;
        return $this;
    }

}
