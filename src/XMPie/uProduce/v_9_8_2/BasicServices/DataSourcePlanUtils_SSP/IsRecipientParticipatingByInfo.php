<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSourcePlanUtils_SSP;

class IsRecipientParticipatingByInfo
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
     * @var string $inPlanID
     */
    protected $inPlanID = null;

    /**
     * @var Connection $inConnectionInfo
     */
    protected $inConnectionInfo = null;

    /**
     * @var RecipientsInfo $inRIInfo
     */
    protected $inRIInfo = null;

    /**
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param Connection $inConnectionInfo
     * @param RecipientsInfo $inRIInfo
     * @param string $inRecipientID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inConnectionInfo = null, $inRIInfo = null, $inRecipientID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPlanID = $inPlanID;
        $this->inConnectionInfo = $inConnectionInfo;
        $this->inRIInfo = $inRIInfo;
        $this->inRecipientID = $inRecipientID;
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
     * @return IsRecipientParticipatingByInfo
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
     * @return IsRecipientParticipatingByInfo
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPlanID()
    {
        return $this->inPlanID;
    }

    /**
     * @param string $inPlanID
     * @return IsRecipientParticipatingByInfo
     */
    public function setInPlanID($inPlanID)
    {
        $this->inPlanID = $inPlanID;
        return $this;
    }

    /**
     * @return Connection
     */
    public function getInConnectionInfo()
    {
        return $this->inConnectionInfo;
    }

    /**
     * @param Connection $inConnectionInfo
     * @return IsRecipientParticipatingByInfo
     */
    public function setInConnectionInfo($inConnectionInfo)
    {
        $this->inConnectionInfo = $inConnectionInfo;
        return $this;
    }

    /**
     * @return RecipientsInfo
     */
    public function getInRIInfo()
    {
        return $this->inRIInfo;
    }

    /**
     * @param RecipientsInfo $inRIInfo
     * @return IsRecipientParticipatingByInfo
     */
    public function setInRIInfo($inRIInfo)
    {
        $this->inRIInfo = $inRIInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientID()
    {
        return $this->inRecipientID;
    }

    /**
     * @param string $inRecipientID
     * @return IsRecipientParticipatingByInfo
     */
    public function setInRecipientID($inRecipientID)
    {
        $this->inRecipientID = $inRecipientID;
        return $this;
    }

}
