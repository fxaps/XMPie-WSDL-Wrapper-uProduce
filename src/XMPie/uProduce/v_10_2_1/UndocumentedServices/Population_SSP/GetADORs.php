<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP;

class GetADORs
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
     * @var string $inPopulationId
     */
    protected $inPopulationId = null;

    /**
     * @var string $inIOType
     */
    protected $inIOType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPopulationId
     * @param string $inIOType
     */
    public function __construct($inUsername = null, $inPassword = null, $inPopulationId = null, $inIOType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPopulationId = $inPopulationId;
      $this->inIOType = $inIOType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP\GetADORs
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP\GetADORs
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPopulationId()
    {
      return $this->inPopulationId;
    }

    /**
     * @param string $inPopulationId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP\GetADORs
     */
    public function setInPopulationId($inPopulationId)
    {
      $this->inPopulationId = $inPopulationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInIOType()
    {
      return $this->inIOType;
    }

    /**
     * @param string $inIOType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP\GetADORs
     */
    public function setInIOType($inIOType)
    {
      $this->inIOType = $inIOType;
      return $this;
    }

}
