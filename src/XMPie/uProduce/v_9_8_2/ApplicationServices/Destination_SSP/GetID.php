<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP;

class GetID
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
     * @var string $inDestinationName
     */
    protected $inDestinationName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDestinationName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDestinationName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDestinationName = $inDestinationName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP\GetID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP\GetID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDestinationName()
    {
      return $this->inDestinationName;
    }

    /**
     * @param string $inDestinationName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP\GetID
     */
    public function setInDestinationName($inDestinationName)
    {
      $this->inDestinationName = $inDestinationName;
      return $this;
    }

}
