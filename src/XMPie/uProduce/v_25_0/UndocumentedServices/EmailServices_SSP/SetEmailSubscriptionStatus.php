<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP;

class SetEmailSubscriptionStatus
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
     * @var int $inSubscriptionStatus
     */
    protected $inSubscriptionStatus = null;

    /**
     * @var string $inSourceJobID
     */
    protected $inSourceJobID = null;

    /**
     * @var string $inSourceRecipientID
     */
    protected $inSourceRecipientID = null;

    /**
     * @var string $inDigitalSignature
     */
    protected $inDigitalSignature = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountID
     * @param string $inPublicationID
     * @param string $inEmailAddress
     * @param int $inSubscriptionStatus
     * @param string $inSourceJobID
     * @param string $inSourceRecipientID
     * @param string $inDigitalSignature
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null, $inPublicationID = null, $inEmailAddress = null, $inSubscriptionStatus = null, $inSourceJobID = null, $inSourceRecipientID = null, $inDigitalSignature = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountID = $inAccountID;
      $this->inPublicationID = $inPublicationID;
      $this->inEmailAddress = $inEmailAddress;
      $this->inSubscriptionStatus = $inSubscriptionStatus;
      $this->inSourceJobID = $inSourceJobID;
      $this->inSourceRecipientID = $inSourceRecipientID;
      $this->inDigitalSignature = $inDigitalSignature;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus
     */
    public function setInEmailAddress($inEmailAddress)
    {
      $this->inEmailAddress = $inEmailAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getInSubscriptionStatus()
    {
      return $this->inSubscriptionStatus;
    }

    /**
     * @param int $inSubscriptionStatus
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus
     */
    public function setInSubscriptionStatus($inSubscriptionStatus)
    {
      $this->inSubscriptionStatus = $inSubscriptionStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSourceJobID()
    {
      return $this->inSourceJobID;
    }

    /**
     * @param string $inSourceJobID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus
     */
    public function setInSourceJobID($inSourceJobID)
    {
      $this->inSourceJobID = $inSourceJobID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSourceRecipientID()
    {
      return $this->inSourceRecipientID;
    }

    /**
     * @param string $inSourceRecipientID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus
     */
    public function setInSourceRecipientID($inSourceRecipientID)
    {
      $this->inSourceRecipientID = $inSourceRecipientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDigitalSignature()
    {
      return $this->inDigitalSignature;
    }

    /**
     * @param string $inDigitalSignature
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus
     */
    public function setInDigitalSignature($inDigitalSignature)
    {
      $this->inDigitalSignature = $inDigitalSignature;
      return $this;
    }

}
