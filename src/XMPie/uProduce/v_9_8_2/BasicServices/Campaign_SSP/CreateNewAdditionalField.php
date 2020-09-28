<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class CreateNewAdditionalField
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
     * @var string $inFieldName
     */
    protected $inFieldName = null;

    /**
     * @var string $inDefaultValue
     */
    protected $inDefaultValue = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inFieldName
     * @param string $inDefaultValue
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inFieldName = null, $inDefaultValue = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inCampaignID = $inCampaignID;
        $this->inFieldName = $inFieldName;
        $this->inDefaultValue = $inDefaultValue;
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
     * @return CreateNewAdditionalField
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
     * @return CreateNewAdditionalField
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
     * @return CreateNewAdditionalField
     */
    public function setInCampaignID($inCampaignID)
    {
        $this->inCampaignID = $inCampaignID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFieldName()
    {
        return $this->inFieldName;
    }

    /**
     * @param string $inFieldName
     * @return CreateNewAdditionalField
     */
    public function setInFieldName($inFieldName)
    {
        $this->inFieldName = $inFieldName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDefaultValue()
    {
        return $this->inDefaultValue;
    }

    /**
     * @param string $inDefaultValue
     * @return CreateNewAdditionalField
     */
    public function setInDefaultValue($inDefaultValue)
    {
        $this->inDefaultValue = $inDefaultValue;
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
     * @return CreateNewAdditionalField
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}
