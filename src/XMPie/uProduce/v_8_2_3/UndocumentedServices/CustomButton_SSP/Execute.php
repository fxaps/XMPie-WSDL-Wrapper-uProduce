<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\CustomButton_SSP;

class Execute
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
     * @var string $inCustomButtonID
     */
    protected $inCustomButtonID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCustomButtonID
     */
    public function __construct($inUsername = null, $inPassword = null, $inCustomButtonID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCustomButtonID = $inCustomButtonID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\CustomButton_SSP\Execute
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\CustomButton_SSP\Execute
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCustomButtonID()
    {
      return $this->inCustomButtonID;
    }

    /**
     * @param string $inCustomButtonID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\CustomButton_SSP\Execute
     */
    public function setInCustomButtonID($inCustomButtonID)
    {
      $this->inCustomButtonID = $inCustomButtonID;
      return $this;
    }

}
