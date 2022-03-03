<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Document_SSP;

class CreateNewFromURL
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
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @var string $inURL
     */
    protected $inURL = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inType
     * @param string $inURL
     * @param string $inName
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inType = null, $inURL = null, $inName = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inType = $inType;
      $this->inURL = $inURL;
      $this->inName = $inName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Document_SSP\CreateNewFromURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Document_SSP\CreateNewFromURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Document_SSP\CreateNewFromURL
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
      return $this->inType;
    }

    /**
     * @param string $inType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Document_SSP\CreateNewFromURL
     */
    public function setInType($inType)
    {
      $this->inType = $inType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInURL()
    {
      return $this->inURL;
    }

    /**
     * @param string $inURL
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Document_SSP\CreateNewFromURL
     */
    public function setInURL($inURL)
    {
      $this->inURL = $inURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Document_SSP\CreateNewFromURL
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\BasicServices\Document_SSP\CreateNewFromURL
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
