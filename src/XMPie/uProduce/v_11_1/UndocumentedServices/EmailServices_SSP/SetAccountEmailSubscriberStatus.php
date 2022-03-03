<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP;

class SetAccountEmailSubscriberStatus
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
     * @var string $inAccountID
     */
    protected $inAccountID = null;

    /**
     * @var string $inEmailAddress
     */
    protected $inEmailAddress = null;

    /**
     * @var boolean $inActive
     */
    protected $inActive = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountID
     * @param string $inEmailAddress
     * @param boolean $inActive
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null, $inEmailAddress = null, $inActive = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountID = $inAccountID;
      $this->inEmailAddress = $inEmailAddress;
      $this->inActive = $inActive;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatus
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountID()
    {
      return $this->inAccountID;
    }

    /**
     * @param string $inAccountID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatus
     */
    public function setInAccountID($inAccountID)
    {
      $this->inAccountID = $inAccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailAddress()
    {
      return $this->inEmailAddress;
    }

    /**
     * @param string $inEmailAddress
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatus
     */
    public function setInEmailAddress($inEmailAddress)
    {
      $this->inEmailAddress = $inEmailAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInActive()
    {
      return $this->inActive;
    }

    /**
     * @param boolean $inActive
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatus
     */
    public function setInActive($inActive)
    {
      $this->inActive = $inActive;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatus
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
