<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP;

class GetEmailSubscriptionStatus
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
     * @var string $inPublicationID
     */
    protected $inPublicationID = null;

    /**
     * @var string $inEmailAddress
     */
    protected $inEmailAddress = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountID
     * @param string $inPublicationID
     * @param string $inEmailAddress
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null, $inPublicationID = null, $inEmailAddress = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountID = $inAccountID;
      $this->inPublicationID = $inPublicationID;
      $this->inEmailAddress = $inEmailAddress;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatus
     */
    public function setInAccountID($inAccountID)
    {
      $this->inAccountID = $inAccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPublicationID()
    {
      return $this->inPublicationID;
    }

    /**
     * @param string $inPublicationID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatus
     */
    public function setInPublicationID($inPublicationID)
    {
      $this->inPublicationID = $inPublicationID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatus
     */
    public function setInEmailAddress($inEmailAddress)
    {
      $this->inEmailAddress = $inEmailAddress;
      return $this;
    }

}
