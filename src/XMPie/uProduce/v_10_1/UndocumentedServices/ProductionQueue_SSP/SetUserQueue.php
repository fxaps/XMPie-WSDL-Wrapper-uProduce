<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\ProductionQueue_SSP;

class SetUserQueue
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
     * @var string $inQueueID
     */
    protected $inQueueID = null;

    /**
     * @var string $inQueueTypeID
     */
    protected $inQueueTypeID = null;

    /**
     * @var string $inUserID
     */
    protected $inUserID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inQueueID
     * @param string $inQueueTypeID
     * @param string $inUserID
     */
    public function __construct($inUsername = null, $inPassword = null, $inQueueID = null, $inQueueTypeID = null, $inUserID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inQueueID = $inQueueID;
      $this->inQueueTypeID = $inQueueTypeID;
      $this->inUserID = $inUserID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\ProductionQueue_SSP\SetUserQueue
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\ProductionQueue_SSP\SetUserQueue
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInQueueID()
    {
      return $this->inQueueID;
    }

    /**
     * @param string $inQueueID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\ProductionQueue_SSP\SetUserQueue
     */
    public function setInQueueID($inQueueID)
    {
      $this->inQueueID = $inQueueID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInQueueTypeID()
    {
      return $this->inQueueTypeID;
    }

    /**
     * @param string $inQueueTypeID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\ProductionQueue_SSP\SetUserQueue
     */
    public function setInQueueTypeID($inQueueTypeID)
    {
      $this->inQueueTypeID = $inQueueTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInUserID()
    {
      return $this->inUserID;
    }

    /**
     * @param string $inUserID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\ProductionQueue_SSP\SetUserQueue
     */
    public function setInUserID($inUserID)
    {
      $this->inUserID = $inUserID;
      return $this;
    }

}
