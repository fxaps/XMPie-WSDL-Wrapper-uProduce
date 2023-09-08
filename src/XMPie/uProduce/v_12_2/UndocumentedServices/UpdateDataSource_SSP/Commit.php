<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP;

class Commit
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
     * @var string $inTransactionId
     */
    protected $inTransactionId = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTransactionId
     */
    public function __construct($inUsername = null, $inPassword = null, $inTransactionId = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTransactionId = $inTransactionId;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\Commit
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\Commit
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTransactionId()
    {
      return $this->inTransactionId;
    }

    /**
     * @param string $inTransactionId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\Commit
     */
    public function setInTransactionId($inTransactionId)
    {
      $this->inTransactionId = $inTransactionId;
      return $this;
    }

}
