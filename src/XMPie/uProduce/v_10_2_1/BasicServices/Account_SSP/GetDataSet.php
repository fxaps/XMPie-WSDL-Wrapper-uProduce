<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Account_SSP;

class GetDataSet
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountID
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountID = $inAccountID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Account_SSP\GetDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Account_SSP\GetDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Account_SSP\GetDataSet
     */
    public function setInAccountID($inAccountID)
    {
      $this->inAccountID = $inAccountID;
      return $this;
    }

}
